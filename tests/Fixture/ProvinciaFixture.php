<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProvinciaFixture
 */
class ProvinciaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'Provincia';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'PROVINCIAID' => 1,
                'PROVINCENAME' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
