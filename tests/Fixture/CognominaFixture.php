<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CognominaFixture
 */
class CognominaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'Cognomina_Et_Agnomina';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'COGNOMENID' => 1,
                'MALE' => 'Lorem ipsum dolor sit amet',
                'FEMALE' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
