<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class ProvinciaTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('Provincia');
        $this->setPrimaryKey('PROVINCIAID');
        $this->belongsTo('STATE_TO_PROVINCIA');
    }
}