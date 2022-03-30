<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CivilServicesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CivilServicesTable Test Case
 */
class CivilServicesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CivilServicesTable
     */
    protected $CivilServices;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CivilServices',
        'app.Cives',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CivilServices') ? [] : ['className' => CivilServicesTable::class];
        $this->CivilServices = $this->getTableLocator()->get('CivilServices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CivilServices);

        parent::tearDown();
    }
}
