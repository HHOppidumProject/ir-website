<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Cives extends AbstractMigration
{
    public $autoId = false;

    /**
     * Up Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-up-method
     *
     * @return void
     */
    public function up()
    {
        $this->table('Cives')
            ->addColumn('CIVISID', 'string', [
                'default' => 'cast(sha2(random_bytes(256),256) as char charset utf8mb3)',
                'limit' => 256,
                'null' => false,
            ])
            ->addPrimaryKey(['CIVISID'])
            ->addColumn('PRAENOMEN', 'tinyinteger', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('NOMEN', 'smallinteger', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('COGNOMEN', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('ISPATRICIAN', 'tinyinteger', [
                'default' => '0',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('PASSWORDHASH', 'string', [
                'default' => null,
                'limit' => 512,
                'null' => false,
            ])
            ->addColumn('PREFFEREDWORDGENDER', 'tinyinteger', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('GENDER', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => false,
            ])
            ->addColumn('EMAIL', 'string', [
                'default' => null,
                'limit' => 512,
                'null' => false,
            ])
            ->addColumn('DOB', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('DATEJOINED', 'date', [
                'default' => 'curdate()',
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'EMAIL',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'COGNOMEN',
                ]
            )
            ->addIndex(
                [
                    'NOMEN',
                ]
            )
            ->addIndex(
                [
                    'PRAENOMEN',
                ]
            )
            ->create();

        $this->table('Cives_Agnomina')
            ->addColumn('IDCIVES-AGNOMIA', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addPrimaryKey(['IDCIVES-AGNOMIA'])
            ->addColumn('CIVIS', 'string', [
                'default' => null,
                'limit' => 256,
                'null' => false,
            ])
            ->addColumn('AGNOMEN', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('POSITION', 'tinyinteger', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'AGNOMEN',
                ]
            )
            ->addIndex(
                [
                    'CIVIS',
                ]
            )
            ->create();

        $this->table('Cives_Priv')
            ->addColumn('CIVIS', 'string', [
                'default' => null,
                'limit' => 256,
                'null' => false,
            ])
            ->addColumn('FORENAME', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('SURNAME', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('ADDRESS', 'string', [
                'default' => null,
                'limit' => 400,
                'null' => true,
            ])
            ->addColumn('CITY', 'string', [
                'default' => null,
                'limit' => 400,
                'null' => false,
            ])
            ->addColumn('STATE_PROVINCE', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('PHONE_NUMBER', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => false,
            ])
            ->addColumn('POSTCODE_ZIP', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => false,
            ])
            ->addColumn('OCCUPATION', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => false,
            ])
            ->addColumn('LAST_PAID_TAX', 'date', [
                'default' => 'curdate()',
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'CIVIS',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'STATE_PROVINCE',
                ]
            )
            ->create();

        $this->table('Civil_Service_Record')
            ->addColumn('RECORDENTRY', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addPrimaryKey(['RECORDENTRY'])
            ->addColumn('CIVIS', 'string', [
                'default' => null,
                'limit' => 256,
                'null' => false,
            ])
            ->addColumn('SERVICE', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('DATESTART', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('DATEEND', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'CIVIS',
                    'SERVICE',
                    'DATESTART',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'CIVIS',
                ]
            )
            ->addIndex(
                [
                    'SERVICE',
                ]
            )
            ->create();

        $this->table('Civil_Services')
            ->addColumn('SERVICEID', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addPrimaryKey(['SERVICEID'])
            ->addColumn('SERVICENAME', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => false,
            ])
            ->addIndex(
                [
                    'SERVICENAME',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('Cognomina_Et_Agnomina')
            ->addColumn('COGNOMENID', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['COGNOMENID'])
            ->addColumn('MALE', 'string', [
                'default' => null,
                'limit' => 400,
                'null' => false,
            ])
            ->addColumn('FEMALE', 'string', [
                'default' => null,
                'limit' => 400,
                'null' => false,
            ])
            ->addIndex(
                [
                    'MALE',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'FEMALE',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('Countries')
            ->addColumn('COUNTRYID', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addPrimaryKey(['COUNTRYID'])
            ->addColumn('COUNTRYNAME', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addIndex(
                [
                    'COUNTRYNAME',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('Nomina')
            ->addColumn('NOMENID', 'smallinteger', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['NOMENID'])
            ->addColumn('NOMEN', 'string', [
                'default' => null,
                'limit' => 400,
                'null' => false,
            ])
            ->addColumn('GENS', 'string', [
                'default' => null,
                'limit' => 400,
                'null' => false,
            ])
            ->addIndex(
                [
                    'NOMEN',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('Praenomina')
            ->addColumn('PRAENOMENID', 'tinyinteger', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['PRAENOMENID'])
            ->addColumn('MALE', 'string', [
                'default' => null,
                'limit' => 400,
                'null' => false,
            ])
            ->addColumn('FEMALE', 'string', [
                'default' => null,
                'limit' => 400,
                'null' => false,
            ])
            ->addColumn('SHORTENED', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addIndex(
                [
                    'MALE',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'FEMALE',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('Provincia')
            ->addColumn('PROVINCIAID', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addPrimaryKey(['PROVINCIAID'])
            ->addColumn('PROVINCENAME', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => false,
            ])
            ->addIndex(
                [
                    'PROVINCENAME',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('State_To_Provincia')
            ->addColumn('STATEID', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addPrimaryKey(['STATEID'])
            ->addColumn('COUNTRY', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('STATENAME', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ])
            ->addColumn('PROVINCIA', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'COUNTRY',
                    'STATENAME',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'COUNTRY',
                ]
            )
            ->addIndex(
                [
                    'PROVINCIA',
                ]
            )
            ->create();

        $this->table('Cives')
            ->addForeignKey(
                'COGNOMEN',
                'Cognomina_Et_Agnomina',
                'COGNOMENID',
                [
                    'update' => 'CASCADE',
                    'delete' => 'RESTRICT',
                ]
            )
            ->addForeignKey(
                'NOMEN',
                'Nomina',
                'NOMENID',
                [
                    'update' => 'CASCADE',
                    'delete' => 'RESTRICT',
                ]
            )
            ->addForeignKey(
                'PRAENOMEN',
                'Praenomina',
                'PRAENOMENID',
                [
                    'update' => 'CASCADE',
                    'delete' => 'RESTRICT',
                ]
            )
            ->update();

        $this->table('Cives_Agnomina')
            ->addForeignKey(
                'AGNOMEN',
                'Cognomina_Et_Agnomina',
                'COGNOMENID',
                [
                    'update' => 'CASCADE',
                    'delete' => 'CASCADE',
                ]
            )
            ->addForeignKey(
                'CIVIS',
                'Cives',
                'CIVISID',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'CASCADE',
                ]
            )
            ->update();

        $this->table('Cives_Priv')
            ->addForeignKey(
                'CIVIS',
                'Cives',
                'CIVISID',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'CASCADE',
                ]
            )
            ->addForeignKey(
                'STATE_PROVINCE',
                'State_To_Provincia',
                'STATEID',
                [
                    'update' => 'CASCADE',
                    'delete' => 'RESTRICT',
                ]
            )
            ->update();

        $this->table('Civil_Service_Record')
            ->addForeignKey(
                'CIVIS',
                'Cives',
                'CIVISID',
                [
                    'update' => 'CASCADE',
                    'delete' => 'CASCADE',
                ]
            )
            ->addForeignKey(
                'SERVICE',
                'Civil_Services',
                'SERVICEID',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('State_To_Provincia')
            ->addForeignKey(
                'COUNTRY',
                'Countries',
                'COUNTRYID',
                [
                    'update' => 'CASCADE',
                    'delete' => 'RESTRICT',
                ]
            )
            ->addForeignKey(
                'PROVINCIA',
                'Provincia',
                'PROVINCIAID',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();
    }

    /**
     * Down Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-down-method
     *
     * @return void
     */
    public function down()
    {
        $this->table('Cives')
            ->dropForeignKey(
                'COGNOMEN'
            )
            ->dropForeignKey(
                'NOMEN'
            )
            ->dropForeignKey(
                'PRAENOMEN'
            )->save();

        $this->table('Cives_Agnomina')
            ->dropForeignKey(
                'AGNOMEN'
            )
            ->dropForeignKey(
                'CIVIS'
            )->save();

        $this->table('Cives_Priv')
            ->dropForeignKey(
                'CIVIS'
            )
            ->dropForeignKey(
                'STATE_PROVINCE'
            )->save();

        $this->table('Civil_Service_Record')
            ->dropForeignKey(
                'CIVIS'
            )
            ->dropForeignKey(
                'SERVICE'
            )->save();

        $this->table('State_To_Provincia')
            ->dropForeignKey(
                'COUNTRY'
            )
            ->dropForeignKey(
                'PROVINCIA'
            )->save();

        $this->table('Cives')->drop()->save();
        $this->table('Cives_Agnomina')->drop()->save();
        $this->table('Cives_Priv')->drop()->save();
        $this->table('Civil_Service_Record')->drop()->save();
        $this->table('Civil_Services')->drop()->save();
        $this->table('Cognomina_Et_Agnomina')->drop()->save();
        $this->table('Countries')->drop()->save();
        $this->table('Nomina')->drop()->save();
        $this->table('Praenomina')->drop()->save();
        $this->table('Provincia')->drop()->save();
        $this->table('State_To_Provincia')->drop()->save();
    }
}
