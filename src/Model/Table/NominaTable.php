<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class NominaTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('NOMINA');
        $this->setPrimaryKey('NOMENID');
        $this->belongsTo('CIVES');
    }
}