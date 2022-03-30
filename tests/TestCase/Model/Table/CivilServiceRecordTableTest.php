<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CivilServiceRecordTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CivilServiceRecordTable Test Case
 */
class CivilServiceRecordTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CivilServiceRecordTable
     */
    protected $CivilServiceRecord;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CivilServiceRecord',
        'app.Cives',
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
        $config = $this->getTableLocator()->exists('CivilServiceRecord') ? [] : ['className' => CivilServiceRecordTable::class];
        $this->CivilServiceRecord = $this->getTableLocator()->get('CivilServiceRecord', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CivilServiceRecord);

        parent::tearDown();
    }

    /**
     * Test findByCivisId method
     *
     * @return void
     * @uses \App\Model\Table\CivilServiceRecordTable::findByCivisId()
     */
    public function testFindByCivisId(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
