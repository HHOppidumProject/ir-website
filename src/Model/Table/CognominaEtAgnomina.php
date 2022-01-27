<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class CognominaEtAgnominaTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('COGNOMINA_ET_AGNOMINA');
        $this->setPrimaryKey('COGNOMENID');
    }
}