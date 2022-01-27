<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class CountriesTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('COUNTRIES');
        $this->setPrimaryKey('COUNTRYID');
    }
}