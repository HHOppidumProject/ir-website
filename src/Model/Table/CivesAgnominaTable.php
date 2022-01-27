<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class CivesAgnominaTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('CIVES_AGNOMINA');
        $this->setPrimaryKey('IDCIVES-AGNOMIA');
        $this->belongsTo('CIVES');
        $this->hasMany("COGNOMINA_ET_AGNOMINA");
    }
}