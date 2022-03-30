<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CivesPrivFixture
 */
class CivesPrivFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'Cives_Priv';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'CIVIS' => 'Lorem ipsum dolor sit amet',
                'FORENAME' => 'Lorem ipsum dolor sit amet',
                'SURNAME' => 'Lorem ipsum dolor sit amet',
                'ADDRESS' => 'Lorem ipsum dolor sit amet',
                'CITY' => 'Lorem ipsum dolor sit amet',
                'STATE_PROVINCE' => 1,
                'PHONE_NUMBER' => 'Lorem ipsum dolor sit amet',
                'POSTCODE_ZIP' => 'Lorem ipsum dolor sit amet',
                'OCCUPATION' => 'Lorem ipsum dolor sit amet',
                'LAST_PAID_TAX' => '2022-03-18',
            ],
        ];
        parent::init();
    }
}
