<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     3.0.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\View;

use Cake\Datasource\Exception\RecordNotFoundException;
use Cake\ORM\Locator\LocatorAwareTrait;
use Cake\View\View;

/**
 * Application View
 *
 * Your application's default view class
 *
 * @link https://book.cakephp.org/4/en/views.html#the-app-view
 */
class AppView extends View
{
    use LocatorAwareTrait;

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading helpers.
     *
     * e.g. `$this->loadHelper('Html');`
     *
     * @return void
     */
    public function initialize(): void
    {
        $cookies = $this->request->getCookieCollection();
        if (
            ($cookies->has('ID') && $cookies->has('abxyzh') && $cookies->has('EMAIL')) &&
            (is_string($cookies->get('ID')->getValue()) &&
                is_string($cookies->get('EMAIL')->getValue()) &&
                is_string($cookies->get('abxyzh')->getValue())
            )
        ) {
            $locator = $this->getTableLocator();
            $Cives = $locator->get('Cives');
            try {
                $civis = $Cives->findByIdAndEmailAndPassword(
                    $cookies->get('ID')->getValue(),
                    $cookies->get('EMAIL')->getValue(),
                    $cookies->get('abxyzh')->getValue()
                )
                    ->firstOrFail();
                if (!is_array($civis)) {
                    if (!$civis->getErrors()) {
                        $this->set('isLoggedIn', true);
                        $this->set('loggedInCivis', $civis);
                    } else {
                        $this->set('isLoggedIn', false);
                        $this->set('loggedInCivis', null);
                    }
                }
            } catch (RecordNotFoundException $e) {
                $this->set('isLoggedIn', false);
                $this->set('loggedInCivis', null);
            }
        }
    }
}
