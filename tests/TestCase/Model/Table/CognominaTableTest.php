<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CognominaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CognominaTable Test Case
 */
class CognominaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CognominaTable
     */
    protected $Cognomina;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Cognomina',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Cognomina') ? [] : ['className' => CognominaTable::class];
        $this->Cognomina = $this->getTableLocator()->get('Cognomina', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Cognomina);

        parent::tearDown();
    }
}
