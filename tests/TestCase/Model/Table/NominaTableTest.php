<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NominaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NominaTable Test Case
 */
class NominaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NominaTable
     */
    protected $Nomina;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Nomina',
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
        $config = $this->getTableLocator()->exists('Nomina') ? [] : ['className' => NominaTable::class];
        $this->Nomina = $this->getTableLocator()->get('Nomina', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Nomina);

        parent::tearDown();
    }
}
