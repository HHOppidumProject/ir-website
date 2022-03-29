<?php
declare(strict_types=1);

// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;

class CivilServiceRecordTable extends Table
{
    /**
     * Sets up table and table relationships
     *
     * @param array $config - not needed but kept for inheritence reasons
     * @return void
     */
    public function initialize(array $config): void
    {
        $this->setTable('Civil_Service_Record');
        $this->setPrimaryKey('RECORDENTRY');
        $this->belongsTo('Cives')->setForeignKey('CIVIS');
        $this->belongsTo('CivilServices')->setForeignKey('SERVICE');
    }

    /**
     * Find the civil service record of a civis by the citizen's ID
     *
     * @param string $civisid - CIVIS ID
     * @return \Cake\ORM\Query
     */
    public function findByCivisId(string $civisid): Query
    {
        return $this->find('all', [
            'conditions' => ['CIVIS' => $civisid],
        ]);
    }
}
