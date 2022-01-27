<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class CivesPrivTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('CIVES_PRIV');
        $this->setPrimaryKey('CIVIS');
    }
}