<?php
declare(strict_types=1);

// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class CivesAgnominaTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('Cives_Agnomina');
        $this->setPrimaryKey('IDCIVES-AGNOMIA');
        $this->belongsTo('Cives');
        $this->hasMany('Cognomina');
    }
}
