<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class StateToProvinciaTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('State_To_Provincia');
        $this->setPrimaryKey('STATEID');
        $this->belongsTo('Countries')->setForeignKey("COUNTRY")->setJoinType('INNER');;
        $this->belongsTo('Provincia')->setForeignKey("PROVINCIA")->setJoinType('INNER');;
    }
}