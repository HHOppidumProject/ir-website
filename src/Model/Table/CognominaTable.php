<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class CognominaTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('COGNOMINA');
        $this->setPrimaryKey('COGNOMENID');
        $this->belongsTo('CIVES');
    }
}