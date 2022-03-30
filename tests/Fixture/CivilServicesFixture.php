<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CivilServicesFixture
 */
class CivilServicesFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'Civil_Services';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'SERVICEID' => 1,
                'SERVICENAME' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
