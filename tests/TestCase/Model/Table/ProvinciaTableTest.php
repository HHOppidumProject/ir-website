<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProvinciaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProvinciaTable Test Case
 */
class ProvinciaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProvinciaTable
     */
    protected $Provincia;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Provincia',
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
        $config = $this->getTableLocator()->exists('Provincia') ? [] : ['className' => ProvinciaTable::class];
        $this->Provincia = $this->getTableLocator()->get('Provincia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Provincia);

        parent::tearDown();
    }
}
