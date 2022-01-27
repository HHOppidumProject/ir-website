<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use CakeDC\Users\Model\Table\UsersTable;

class CivesTable extends UsersTable
{
    public function initialize(array $config): void
    {
        $this->setTable('CIVES');
        $this->setPrimaryKey('CIVESID');
        $this->hasOne('CIVESPRIV');
    }
}