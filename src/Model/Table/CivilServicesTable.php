<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class CivilServicesTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('Civil_Services');
        $this->setPrimaryKey('SERVICEID');
        $this->belongsToMany('Cives');
    }
}