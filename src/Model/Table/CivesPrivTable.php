<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\Validation\Validator;
use Cake\ORM\Table;

class CivesPrivTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('Cives_Priv');
        $this->setPrimaryKey('CIVIS');
        $this->belongsTo('StateToProvincia')->setForeignKey("STATE_PROVINCE")->setJoinType('INNER');
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->notEmptyString('FORENAME')
            ->notEmptyString('SURNAME')
            ->notEmptyString('CITY')
            ->nonNegativeInteger('STATE_PROVINCE')
            ->integer("STATE_PROVINCE", "Something went wrong!")
            ->notEmptyString('PHONE_NUMBER')
            ->notEmptyString('POSTCODE_ZIP')
            ->notEmptyString('OCCUPATION');

        return $validator;
    }
}