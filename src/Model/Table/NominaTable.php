<?php
declare(strict_types=1);

// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class NominaTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('Nomina');
        $this->setPrimaryKey('NOMENID');
        $this->belongsTo('Cives');
    }
}
