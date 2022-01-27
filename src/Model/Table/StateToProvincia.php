<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class StateToProvinciaTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('STATE_TO_PROVINCIA');
        $this->setPrimaryKey('STATEID');
        $this->belongsTo('CIVES_PRIV');
    }
}