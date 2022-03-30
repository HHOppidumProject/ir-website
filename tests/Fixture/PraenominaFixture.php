<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PraenominaFixture
 */
class PraenominaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'Praenomina';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'PRAENOMENID' => 1,
                'MALE' => 'Lorem ipsum dolor sit amet',
                'FEMALE' => 'Lorem ipsum dolor sit amet',
                'SHORTENED' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
