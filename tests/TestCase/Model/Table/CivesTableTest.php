<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CivesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CivesTable Test Case
 */
class CivesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CivesTable
     */
    protected $Cives;

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
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Cives') ? [] : ['className' => CivesTable::class];
        $this->Cives = $this->getTableLocator()->get('Cives', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Cives);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CivesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test findById method
     *
     * @return void
     * @uses \App\Model\Table\CivesTable::findById()
     */
    public function testFindById(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test findByEmailAndPassword method
     *
     * @return void
     * @uses \App\Model\Table\CivesTable::findByEmailAndPassword()
     */
    public function testFindByEmailAndPassword(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test findByIdAndEmailAndPassword method
     *
     * @return void
     * @uses \App\Model\Table\CivesTable::findByIdAndEmailAndPassword()
     */
    public function testFindByIdAndEmailAndPassword(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
