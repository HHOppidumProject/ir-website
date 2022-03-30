<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CountriesFixture
 */
class CountriesFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'Countries';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'COUNTRYID' => 1,
                'COUNTRYNAME' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
