<?php
declare(strict_types=1);

// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\Validation\Validator;
use CakeDC\Users\Model\Table\UsersTable;

class CivesTable extends UsersTable
{
    /**
     * Sets up table and table relationships
     *
     * @param array $config - not needed but kept for inheritence reasons
     * @return void
     */
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

    /**
     * Creates table validator:
     * PASSWORDHASH cannot be empty
     * PRAENOMEN cannot be empty and cannot be negative and must be an integer
     * NOMEN cannot be empty and cannot be negative and must be an integer
     * COGNOMEN cannot be empty and cannot be negative and must be an integer
     * PREFFEREDWORDGENDER cannot be empty and must be an integer
     * GENDER cannot be empty and must be an integer
     * EMAIL cannot be empty and must be less than 255 characters long and must be an email
     * DOB cannot be empty and must be a date
     *
     * @param \Cake\Validation\Validator $validator - not needed but kept for inheritence reasons
     * @return \Cake\Validation\Validator
     */
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

    /**
     * Find a civis by their CIVISID
     *
     * @param string $id - CIVISID of the civis to find
     * @return /Cake/ORM/Query
     */
    public function findById(string $id): Query
    {
        return $this->find('all', [
            'conditions' => ['CIVISID' => $id],
        ]);
    }

    /**
     * Find a civis by their email and password
     *
     * @param string $email - email to search for
     * @param string $passwordHash - password hash to search for
     * @return /Cake/ORM/Query
     */
    public function findByEmailAndPassword(string $email, string $passwordHash): Query
    {
        return $this->find('all', [
            'conditions' => ['EMAIL' => $email, 'PASSWORDHASH' => $passwordHash],
        ]);
    }

    /**
     * Find a civis by their email and password and ID.
     *
     * @param string $id - CIVISID of the civis to find
     * @param string $email - email to search for
     * @param string $passwordHash - password hash to search for
     * @return /Cake/ORM/Query
     */
    public function findByIdAndEmailAndPassword(string $id, string $email, string $passwordHash): Query
    {
        return $this->find('all', [
            'conditions' => ['EMAIL' => $email, 'PASSWORDHASH' => $passwordHash, 'CIVISID' => $id],
        ]);
    }
}
