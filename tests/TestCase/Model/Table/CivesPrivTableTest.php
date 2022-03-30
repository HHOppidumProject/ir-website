<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CivesPrivTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CivesPrivTable Test Case
 */
class CivesPrivTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CivesPrivTable
     */
    protected $CivesPriv;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CivesPriv',
        'app.StateToProvincia',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CivesPriv') ? [] : ['className' => CivesPrivTable::class];
        $this->CivesPriv = $this->getTableLocator()->get('CivesPriv', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CivesPriv);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CivesPrivTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
