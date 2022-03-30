<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CivilServiceRecordFixture
 */
class CivilServiceRecordFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'Civil_Service_Record';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'RECORDENTRY' => 1,
                'CIVIS' => 'Lorem ipsum dolor sit amet',
                'SERVICE' => 1,
                'DATESTART' => '2022-03-18',
                'DATEEND' => '2022-03-18',
            ],
        ];
        parent::init();
    }
}
