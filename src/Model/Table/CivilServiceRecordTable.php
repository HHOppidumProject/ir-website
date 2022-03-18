<?php
declare(strict_types=1);

// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;

class CivilServiceRecordTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('Civil_Service_Record');
        $this->setPrimaryKey('RECORDENTRY');
        $this->belongsTo('Cives')->setForeignKey('CIVIS');
        $this->belongsTo('CivilServices')->setForeignKey('SERVICE');
    }

    public function findByCivisId(string $civisid): Query
    {
        return $this->find('all', [
            'conditions' => ['CIVIS' => $civisid],
        ]);
    }
}
