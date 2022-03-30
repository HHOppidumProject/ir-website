<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PraenominaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PraenominaTable Test Case
 */
class PraenominaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PraenominaTable
     */
    protected $Praenomina;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Praenomina',
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
        $config = $this->getTableLocator()->exists('Praenomina') ? [] : ['className' => PraenominaTable::class];
        $this->Praenomina = $this->getTableLocator()->get('Praenomina', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Praenomina);

        parent::tearDown();
    }
}
