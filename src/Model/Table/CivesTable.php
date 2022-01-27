<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class ArticlesTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('CIVES');
        $this->setPrimaryKey('CIVESID');
        $this->addBehavior('Timestamp');
    }
}