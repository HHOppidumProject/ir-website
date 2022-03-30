<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StateToProvinciaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StateToProvinciaTable Test Case
 */
class StateToProvinciaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StateToProvinciaTable
     */
    protected $StateToProvincia;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.StateToProvincia',
        'app.Countries',
        'app.Provincia',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('StateToProvincia') ? [] : ['className' => StateToProvinciaTable::class];
        $this->StateToProvincia = $this->getTableLocator()->get('StateToProvincia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->StateToProvincia);

        parent::tearDown();
    }
}
