<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StateToProvinciaFixture
 */
class StateToProvinciaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'State_To_Provincia';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'STATEID' => 1,
                'COUNTRY' => 1,
                'STATENAME' => 'Lorem ipsum dolor sit amet',
                'PROVINCIA' => 1,
            ],
        ];
        parent::init();
    }
}
