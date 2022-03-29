<?php
declare(strict_types=1);

// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CivesPrivTable extends Table
{
    /**
     * Sets up table and table relationships
     *
     * @param array $config - not needed but kept for inheritence reasons
     * @return void
     */
    public function initialize(array $config): void
    {
        $this->setTable('Cives_Priv');
        $this->setPrimaryKey('CIVIS');
        $this->belongsTo('StateToProvincia')->setForeignKey('STATE_PROVINCE')->setJoinType('INNER');
    }

    /**
     * Creates table validator:
     * Forename cannot be empty
     * Surname cannot be empty
     * City cannot be empty
     * State/Province cannot be empty and must be an integer
     * Phone Number cannot be empty
     * Postcode/Zip code cannot be empty
     * Occupation cannot be empty
     *
     * @param \Cake\Validation\Validator $validator - not needed but kept for inheritence reasons
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->notEmptyString('FORENAME')
            ->notEmptyString('SURNAME')
            ->notEmptyString('CITY')
            ->nonNegativeInteger('STATE_PROVINCE')
            ->integer('STATE_PROVINCE', 'Something went wrong!')
            ->notEmptyString('PHONE_NUMBER')
            ->notEmptyString('POSTCODE_ZIP')
            ->notEmptyString('OCCUPATION');

        return $validator;
    }
}
