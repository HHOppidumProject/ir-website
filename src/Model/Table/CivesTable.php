<?php
declare(strict_types=1);

// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\Validation\Validator;
use CakeDC\Users\Model\Table\UsersTable;

class CivesTable extends UsersTable
{
    public function initialize(array $config): void
    {
        $this->setTable('Cives');
        $this->setPrimaryKey('CIVISID');
        $this->hasOne('CivesPriv')->setForeignKey('CIVIS')->setJoinType('INNER');
        $this->belongsTo('Cognomina')->setForeignKey('COGNOMEN')->setJoinType('INNER');
        $this->belongsTo('Nomina')->setForeignKey('NOMEN')->setJoinType('INNER');
        $this->belongsTo('Praenomina')->setForeignKey('PRAENOMEN')->setJoinType('INNER');
        $this->belongsToMany('CivilServices', ['through' => 'CivilServiceRecord']);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->notEmptyString('PASSWORDHASH')

            ->nonNegativeInteger('PRAENOMEN', `Something went wrong!`)
            ->integer('PRAENOMEN', 'Something went wrong!')

            ->nonNegativeInteger('NOMEN', `Something went wrong!`)
            ->integer('NOMEN', 'Something went wrong!')

            ->nonNegativeInteger('COGNOMEN', `Something went wrong!`)
            ->integer('COGNOMEN', 'Something went wrong!')

            ->nonNegativeInteger('PREFFEREDWORDGENDER')
            ->integer('PREFFEREDWORDGENDER', 'Something went wrong!')

            ->notEmptyString('GENDER')

            ->notEmptyString('EMAIL')
            ->maxLength('EMAIL', 255)
            ->email('EMAIL')

            ->notEmptyDate('DOB')
            ->date('DOB');

        return $validator;
    }

    public function findById(string $id): Query
    {
        return $this->find('all', [
            'conditions' => ['CIVISID' => $id],
        ]);
    }

    public function findByEmailAndPassword(string $email, string $passwordHash): Query
    {
        return $this->find('all', [
            'conditions' => ['EMAIL' => $email, 'PASSWORDHASH' => $passwordHash],
        ]);
    }

    public function findByIdAndEmailAndPassword(string $id, string $email, string $passwordHash): Query
    {
        return $this->find('all', [
            'conditions' => ['EMAIL' => $email, 'PASSWORDHASH' => $passwordHash, 'CIVISID' => $id],
        ]);
    }
}
