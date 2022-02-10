<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class PraenominaTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('Praenomina');
        $this->setPrimaryKey('PRAENOMENID');
        $this->belongsTo('CIVES');
    }
}