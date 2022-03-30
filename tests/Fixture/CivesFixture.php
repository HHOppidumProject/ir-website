<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CivesFixture
 */
class CivesFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'Cives';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'CIVISID' => '231e1b37-9962-4b1e-86ec-1cf61a2bed84',
                'PRAENOMEN' => 1,
                'NOMEN' => 1,
                'COGNOMEN' => 1,
                'ISPATRICIAN' => 1,
                'PASSWORDHASH' => 'Lorem ipsum dolor sit amet',
                'PREFFEREDWORDGENDER' => 1,
                'GENDER' => 'Lorem ipsum dolor sit amet',
                'EMAIL' => 'Lorem ipsum dolor sit amet',
                'DOB' => '2022-03-18',
                'DATEJOINED' => '2022-03-18',
            ],
        ];
        parent::init();
    }
}
