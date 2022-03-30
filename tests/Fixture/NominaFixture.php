<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NominaFixture
 */
class NominaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'Nomina';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'NOMENID' => 1,
                'NOMEN' => 'Lorem ipsum dolor sit amet',
                'GENS' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
