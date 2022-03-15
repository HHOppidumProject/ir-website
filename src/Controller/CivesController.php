<?php

namespace App\Controller;

use Cake\Mailer\Mailer;
use Cake\Datasource\Exception\RecordNotFoundException;
use Cake\Http\Cookie\Cookie;
use Cake\Http\Cookie\CookieCollection;
use DateTime;

class CivesController extends AppController
{

    public $paginate = [
        'limit' => 25
    ];

    public function index()
    {
        $this->viewBuilder()->setLayout('default');
        $this->loadComponent('Paginator');
        $cives = $this->Paginator->paginate($this->Cives->find('all')->contain(['Praenomina', 'Nomina', 'Cognomina']));
        $this->set(compact('cives'));
    }

    public function logout(){
        $cookies = $this->request->getCookieCollection();
        if ($cookies->has('ID') && $cookies->has('abxyzh') && $cookies->has('EMAIL')) {
            $this->response = $this->response->withExpiredCookie(new Cookie('ID'));
            $this->response = $this->response->withExpiredCookie(new Cookie('abxyzh'));
            $this->response = $this->response->withExpiredCookie(new Cookie('EMAIL'));
        }
        $this->redirect($this->referer());
    }

    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('default');
        $civis = $this->Cives->findById($id)->contain(['Praenomina', 'Nomina', 'Cognomina', 'CivesPriv' => [
            'StateToProvincia' => [
                'Provincia'
            ]
        ]])->firstOrFail();
        $serviceRecord = $this->getTableLocator()->get('CivilServiceRecord')->findByCivisId($id)->contain(['CivilServices'])->order(['DATESTART' => 'DESC'])->all();
        $this->set(compact('serviceRecord'));
        $this->set(compact('civis'));
    }

    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('default');
        $civis = $this->Cives->findById($id)->contain(['Praenomina', 'Nomina', 'Cognomina', 'CivesPriv' => [
            'StateToProvincia' => [
                'Provincia'
            ]
        ]])->firstOrFail();
        $this->set(compact('civis'));
    }

    public function login()
    {
        $this->viewBuilder()->setLayout('default');
        $Emptycivis = $this->Cives->newEmptyEntity();
        $this->set('notFound', false);
        $this->set('civis', compact('Emptycivis'));
        if ($this->request->is(['post', 'put'])) {
            if (!empty($this->request->getData())) {
                $data = $this->request->getParsedBody();
                try {
                    $prev = '';
                    foreach (str_split($data['PASSWORDHASH']) as $char) {
                        $prev = hash('sha256', $prev . $char);
                    }
                    $civis = $this->Cives->findByEmailAndPassword(strtolower($data['EMAIL']), $prev)->firstOrFail();
                    if(!$civis->getErrors()){
                        //TODO Implement remember me, css stopping it at the mo.
                        $this->response = $this->response->withCookieCollection(new CookieCollection([
                            new Cookie(
                                'ID',
                                $civis->CIVISID,
                                new DateTime('+1 day'),
                                '/',
                                false,
                                false
                            ),
                            new Cookie(
                                'abxyzh',
                                $civis->PASSWORDHASH,
                                new DateTime('+1 day'),
                                '/',
                                false,
                                false
                            ),
                            new Cookie(
                                'EMAIL',
                                $civis->EMAIL,
                                new DateTime('+1 day'),
                                '/',
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
                        'element' => 'fail'
                    ]);
                } else {
                    $civis->GENDER = strtolower($civis->GENDER);
                    $prev = '';
                    foreach (str_split($civis->PASSWORDHASH) as $char) {
                        $prev = hash('sha256', $prev . $char);
                    }
                    $civis->PASSWORDHASH = $prev;
                    $civis->CIVISID = hash('sha256', substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(256 / strlen($x)))), 1, 256));
                    $civis->EMAIL = strtolower($civis->EMAIL);
                    if (!$civis->DOB->wasWithinLast('15 years')) {
                        if (in_array($civis->GENDER, ['male', 'female', 'agender', 'gender fluid', 'gender-fluid', 'genderfluid', 'intersex', 'transgender', 'trans-gender'])) {
                            if ($this->Cives->save($civis)) {
                                $isSuccessful = true;
                                $this->redirect(['action' => 'success', '?' => ['id' => $civis->CIVISID, 'email' => $civis->EMAIL, 'dob' => $civis->DOB, 'passwordhash' => $civis->PASSWORDHASH]]);
                            } else {
                                $mailer = new Mailer('default');
                                $mailer->setTo('senatores@imperivm-romanvm.com')
                                    ->addTo('censores@imperivm-romanvm.com')
                                    ->setBcc($civis->EMAIL)
                                    ->deliver("Miscellaneous problems/Undefined problem. Details:\n" . $civis->__toString());
                                $isSuccessful = true;
                                $this->set(compact('isSuccessful'));
                            }
                        } else {
                            $mailer = new Mailer('default');
                            $mailer->setTo('senatores@imperivm-romanvm.com')
                                ->addTo('censores@imperivm-romanvm.com')
                                ->setBcc($civis->EMAIL)
                                ->deliver("Gender undefined in program, check for errors. Details:\n" . $civis->__toString());
                            $isSuccessful = true;
                            $this->set(compact('isSuccessful'));
                        }
                    } else {
                        $mailer = new Mailer('default');
                        $mailer->setTo('senatores@imperivm-romanvm.com')
                            ->addTo('censores@imperivm-romanvm.com')
                            ->setBcc($civis->EMAIL)
                            ->setSubject('Becoming an Imperivm Romanvm Citizen')
                            ->deliver("Under 15, check with parental permission required. Details:\n" . $civis->__toString());

                        $isSuccessful = true;
                        $this->set(compact('isSuccessful'));
                    }
                }
            }
        }
    }

    public function success()
    {
        $id = $this->request->getQuery('id');
        $email = $this->request->getQuery('email');
        $PASSWORDHASH = $this->request->getQuery('passwordhash');
        if (empty($id) || empty($email) || empty($PASSWORDHASH)) {
            $this->redirect(['action' => 'login']);
        }
        $this->viewBuilder()->setLayout('default');
        $civis = $this->Cives->findById($id)->contain(['Praenomina', 'Nomina', 'Cognomina', 'CivesPriv' => [
            'StateToProvincia' => [
                'Provincia'
            ]
        ]])->firstOrFail();
        $mailer = new Mailer('default');
        $mailer->setTo($civis->EMAIL)
            ->setBcc('senatores@imperivm-romanvm.com')
            ->addBcc('censores@imperivm-romanvm.com')
            ->addBcc('consules@imperivm-romanvm.com')
            ->setSubject('Welcome to the Imperivm Romanvm - Your Citizenship details')
            ->deliver("Congratulations on becoming a citizen of the Imperivm Romanvm! Here are your details:\n" .
                "CIVISID: " . $civis->CIVISID .
                "\nPraenomen: " . ($civis->PREFFEREDWORDGENDER === 0 ? h($civis->praenomina->MALE) : h($civis->praenomina->FEMALE)) .
                "\nNomen: " . ($civis->PREFFEREDWORDGENDER === 0 ? h($civis->nomina->NOMEN) : h($civis->nomina->GENS)) .
                "\nCognomen: " . ($civis->PREFFEREDWORDGENDER === 0 ? h($civis->cognomina->MALE) : h($civis->cognomina->FEMALE)) .
                "\nPreferred Word Gender: " . ($civis->PREFFEREDWORDGENDER ? "Female" : "Male") .
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
                "\nIf there is any problems please contact : censores@imperivm-romanvm.com");
        $this->set(compact('civis'));
    }

    public function faq(){
        $this->viewBuilder()->setLayout('default');
    }
}
