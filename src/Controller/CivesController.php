<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Datasource\Exception\RecordNotFoundException;
use Cake\Http\Cookie\Cookie;
use Cake\Http\Cookie\CookieCollection;
use Cake\Mailer\Mailer;
use DateTime;

/**
 * Cives Controller
 *
 * @property \App\Model\Table\CivesTable $Cives
 * @method \App\Model\Entity\Cives[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CivesController extends AppController
{
    /**
     * How many items should be listed per pagination
     */
    public $paginate = [
        'limit' => 25,
    ];

    /**
     * Displays Cives Index Page with pagination
     *
     * @return void
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('default');
        $this->loadComponent('Paginator');
        $cives = $this->Paginator->paginate($this->Cives->find('all')->contain(['Praenomina', 'Nomina', 'Cognomina']));
        $this->set(compact('cives'));
    }

    /**
     * Logs out the current user and removes the cookies assigned to the user
     *
     * @return void
     */
    public function logout()
    {
        $cookies = $this->request->getCookieCollection();
        if ($cookies->has('ID') && $cookies->has('abxyzh') && $cookies->has('EMAIL')) {
            $this->response = $this->response->withExpiredCookie(new Cookie('ID'));
            $this->response = $this->response->withExpiredCookie(new Cookie('abxyzh'));
            $this->response = $this->response->withExpiredCookie(new Cookie('EMAIL'));
        }
        $this->redirect($this->referer());
    }

    /**
     * Displays information on the currently selected civis
     *
     * @param string $id -- id (primary key) of civis
     * @return void
     */
    public function view(string $id = '')
    {
        $this->viewBuilder()->setLayout('default');
        $civis = $this->Cives->findById($id)->contain(['Praenomina', 'Nomina', 'Cognomina', 'CivesPriv' => [
            'StateToProvincia' => [
                'Provincia',
            ],
        ]])->firstOrFail();
        $serviceRecord = $this->getTableLocator()
            ->get('CivilServiceRecord');
        // ->findByCivisId($id)
        // ->contain(['CivilServices'])
        // ->order(['DATESTART' => 'DESC'])->all();
        $this->set(compact('serviceRecord'));
        $this->set(compact('civis'));
    }

    /**
     * Edit the currently selected civis
     *
     * TODO CREATE PAGE TO EDIT CIVIS
     *
     * @param string $id -- id (primary key) of civis
     * @return void
     */
    public function edit(string $id = ''): void
    {
        $this->viewBuilder()->setLayout('default');
        $civis = $this->Cives->findById($id)->contain(['Praenomina', 'Nomina', 'Cognomina', 'CivesPriv' => [
            'StateToProvincia' => [
                'Provincia',
            ],
        ]])->firstOrFail();
        $this->set(compact('civis'));
    }

    /**
     * Displays login page form, creates cookies if appropriate and communicates with database
     *
     * TODO Move Login logic to SSO and create SSO
     *
     * @return void
     */
    public function login()
    {
        $this->viewBuilder()->setLayout('default');
        $Emptycivis = $this->Cives->newEmptyEntity();
        $this->set('notFound', false);
        $this->set('civis', compact('Emptycivis'));
        if ($this->request->is(['post', 'put'])) {
            if (!empty($this->request->getData())) {
                $data = $this->request->getParsedBody();
                if (is_array($data)) {
                    try {
                        $prev = '';
                        foreach (str_split($data['PASSWORDHASH']) as $char) {
                            $prev = hash('sha256', $prev . $char);
                        }
                        $civis = $this->Cives->findByEmailAndPassword(strtolower($data['EMAIL']), $prev)->firstOrFail();
                        if (!is_array($civis) && !$civis->getErrors()) {
                            /** @var \App\Model\Entity\Cives $civis*/
                            //TODO Implement remember me, css stopping it at the mo.
                            $this->response = $this->response->withCookieCollection(new CookieCollection([
                                new Cookie(
                                    'ID',
                                    $civis->CIVISID,
                                    new DateTime('+1 day'),
                                    '/',
                                    null,
                                    false,
                                    false
                                ),
                                new Cookie(
                                    'abxyzh',
                                    $civis->PASSWORDHASH,
                                    new DateTime('+1 day'),
                                    '/',
                                    null,
                                    false,
                                    false
                                ),
                                new Cookie(
                                    'EMAIL',
                                    $civis->EMAIL,
                                    new DateTime('+1 day'),
                                    '/',
                                    null,
                                    false,
                                    false
                                ),
                            ]));
                            $this->redirect(['action' => 'index']);
                        }
                    } catch (RecordNotFoundException $e) {
                        $this->set('notFound', true);
                    }
                }
            }
        }
    }

    /**
     * Displays signup form and handles signup logic, will also move this to SSO
     *
     * TODO MOVE TO SIGNUP LOGIC TO SSO
     *
     * @return void
     */
    public function signup()
    {
        $this->viewBuilder()->setLayout('default');
        $Emptycivis = $this->Cives->newEmptyEntity();
        $praenomina = $this->getTableLocator()->get('Praenomina')->find('all')->all();
        $nomina = $this->getTableLocator()->get('Nomina')->find('all')->all();
        $cognomina = $this->getTableLocator()->get('Cognomina')->find('all')->all();
        $countries = $this->getTableLocator()->get('Countries')->find('all')->contain(['StateToProvincia'])->all();
        $isSuccessful = null;
        $this->set('civis', compact('Emptycivis'));
        $this->set(compact('praenomina'));
        $this->set(compact('nomina'));
        $this->set(compact('cognomina'));
        $this->set(compact('countries'));
        $this->set(compact('isSuccessful'));
        if ($this->request->is(['post', 'put'])) {
            if (!empty($this->request->getData())) {
                $civis = $this->Cives->newEntity($this->request->getData(), ['associated' => [
                    'CivesPriv',
                ]]);
                if ($civis->getErrors()) {
                    $this->Flash->error('The user has not been saved.', [
                        'element' => 'fail',
                    ]);
                } else {
                    $civis->GENDER = strtolower($civis->GENDER);
                    $prev = '';
                    foreach (str_split($civis->PASSWORDHASH) as $char) {
                        $prev = hash('sha256', $prev . $char);
                    }
                    $civis->PASSWORDHASH = $prev;

                    $allLettersAndNumbers = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $repeatTimes = intval(ceil(256 / strlen($allLettersAndNumbers)));
                    $randomString = str_repeat($allLettersAndNumbers, $repeatTimes);
                    $civis->CIVISID = hash('sha256', substr(str_shuffle($randomString), 1, 256));

                    $civis->EMAIL = strtolower($civis->EMAIL);
                    $acceptedPhraseList = [
                        'male',
                        'female',
                        'agender',
                        'gender fluid',
                        'gender-fluid',
                        'genderfluid',
                        'intersex',
                        'transgender',
                        'trans-gender',
                    ];
                    if (!$civis->DOB->wasWithinLast('15 years')) {
                        if (in_array($civis->GENDER, $acceptedPhraseList)) {
                            if ($this->Cives->save($civis)) {
                                $isSuccessful = true;
                                $this->redirect(['action' => 'success', '?' => [
                                    'id' => $civis->CIVISID,
                                    'email' => $civis->EMAIL,
                                    'dob' => $civis->DOB,
                                    'passwordhash' => $civis->PASSWORDHASH,
                                ]]);
                            } else {
                                $mailer = new Mailer('default');
                                $mailer->setTo('senatores@imperivm-romanvm.com')
                                    ->addTo('censores@imperivm-romanvm.com')
                                    ->setBcc($civis->EMAIL)
                                    ->deliver("Miscellaneous problems/Undefined problem. Details:\n" .
                                        $civis->__toString());
                                $isSuccessful = true;
                                $this->set(compact('isSuccessful'));
                            }
                        } else {
                            $mailer = new Mailer('default');
                            $mailer->setTo('senatores@imperivm-romanvm.com')
                                ->addTo('censores@imperivm-romanvm.com')
                                ->setBcc($civis->EMAIL)
                                ->deliver("Gender undefined in program, check for errors. Details:\n" .
                                    $civis->__toString());
                            $isSuccessful = true;
                            $this->set(compact('isSuccessful'));
                        }
                    } else {
                        $mailer = new Mailer('default');
                        $mailer->setTo('senatores@imperivm-romanvm.com')
                            ->addTo('censores@imperivm-romanvm.com')
                            ->setBcc($civis->EMAIL)
                            ->setSubject('Becoming an Imperivm Romanvm Citizen')
                            ->deliver("Under 15, check with parental permission required. Details:\n" .
                                $civis->__toString());

                        $isSuccessful = true;
                        $this->set(compact('isSuccessful'));
                    }
                }
            }
        }
    }

    /**
     * Displays successful signup page and send success email
     *
     * @return void
     */
    public function success()
    {
        $id = $this->request->getQuery('id');
        $email = $this->request->getQuery('email');
        $PASSWORDHASH = $this->request->getQuery('passwordhash');
        if (
            (empty($id) || empty($email) || empty($PASSWORDHASH)) ||
            (!is_string($id) || !is_string($email) || !is_string($PASSWORDHASH))
        ) {
            $this->redirect(['action' => 'login']);
        } else {
            $this->viewBuilder()->setLayout('default');
            $civis = $this->Cives->findById($id)->contain(['Praenomina', 'Nomina', 'Cognomina', 'CivesPriv' => [
                'StateToProvincia' => [
                    'Provincia',
                ],
            ]])->firstOrFail();
            if (!is_array($civis)) {
                /** @var \App\Model\Entity\Cives $civis*/
                if (
                    !$civis->getErrors() &&
                    $civis->cives_priv !== null &&
                    $civis->cives_priv->state_to_provincium->provincium != null
                ) {
                    $mailer = new Mailer('default');
                    $mailer->setTo($civis->EMAIL)
                        ->setBcc('senatores@imperivm-romanvm.com')
                        ->addBcc('censores@imperivm-romanvm.com')
                        ->addBcc('consules@imperivm-romanvm.com')
                        ->setSubject('Welcome to the Imperivm Romanvm - Your Citizenship details')
                        ->deliver(
                            "Congratulations on becoming a citizen of the Imperivm Romanvm! Here are your details:\n"
                            . 'CIVISID: ' . $civis->CIVISID .
                            "\nPraenomen: " .
                            ($civis->PREFFEREDWORDGENDER === 0 ? h($civis
                                ->praenomina->MALE) : h($civis->praenomina->FEMALE))
                            . "\nNomen: " .
                            ($civis->PREFFEREDWORDGENDER === 0 ? h($civis->nomina->NOMEN) : h($civis->nomina->GENS)) .
                            "\nCognomen: " .
                            ($civis->PREFFEREDWORDGENDER === 0 ? h($civis
                                ->cognomina->MALE) : h($civis->cognomina->FEMALE))
                            . "\nPreferred Word Gender: " . ($civis->PREFFEREDWORDGENDER ? 'Female' : 'Male') .
                            "\nGender: " . $civis->GENDER .
                            "\nEmail: " . $civis->EMAIL .
                            "\nDate of Birth: " . $civis->DOB .
                            "\nForename: " . $civis->cives_priv->FORENAME .
                            "\nSurname: " . $civis->cives_priv->SURNAME .
                            "\nAddress Line 1: " . $civis->cives_priv->ADDRESS .
                            "\nCity / Town: " . $civis->cives_priv->CITY .
                            "\nPhone Number: " . $civis->cives_priv->PHONE_NUMBER .
                            "\nPostcode / ZIP: " . $civis->cives_priv->POSTCODE_ZIP .
                            "\nOccupation / Job: " . $civis->cives_priv->OCCUPATION .
                            "\nState / County: " . $civis->cives_priv->state_to_provincium->STATENAME .
                            "\nProvince: " . $civis->cives_priv->state_to_provincium->provincium->PROVINCENAME .
                            "\nIf there is any problems please contact : censores@imperivm-romanvm.com"
                        );
                    $this->set(compact('civis'));
                }
            }
        }
    }

    /**
     * Displays Cives Signup FAQ.
     *
     * @return void
     */
    public function faq()
    {
        $this->viewBuilder()->setLayout('default');
    }
}
