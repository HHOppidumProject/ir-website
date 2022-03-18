<?php
declare(strict_types=1);

// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class ProvinciaTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('Provincia');
        $this->setPrimaryKey('PROVINCIAID');
        $this->hasMany('StateToProvincia')->setForeignKey('PROVINCIA');
    }
}
