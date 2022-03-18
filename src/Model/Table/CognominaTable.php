<?php
declare(strict_types=1);

// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class CognominaTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('Cognomina_Et_Agnomina');
        $this->setPrimaryKey('COGNOMENID');
    }
}
