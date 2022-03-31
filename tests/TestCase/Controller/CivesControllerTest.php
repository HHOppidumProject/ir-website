<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\CivesController Test Case
 *
 * @uses \App\Controller\CivesController
 */
class CivesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Cives',
        'app.CivesPriv',
        'app.Cognomina',
        'app.Nomina',
        'app.Praenomina',
        'app.CivilServices',
        'app.CivilServiceRecord',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\CivesController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test logout method
     *
     * @return void
     * @uses \App\Controller\CivesController::logout()
     */
    public function testLogout(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\CivesController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\CivesController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test login method
     *
     * @return void
     * @uses \App\Controller\CivesController::login()
     */
    public function testLogin(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test signup method
     *
     * @return void
     * @uses \App\Controller\CivesController::signup()
     */
    public function testSignup(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test success method
     *
     * @return void
     * @uses \App\Controller\CivesController::success()
     */
    public function testSuccess(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test faq method
     *
     * @return void
     * @uses \App\Controller\CivesController::faq()
     */
    public function testFaq(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
