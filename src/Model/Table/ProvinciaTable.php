<?php
declare(strict_types=1);

// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class ProvinciaTable extends Table
{
    /**
     * Sets up table and table relationships
     *
     * @param array $config - not needed but kept for inheritence reasons
     * @return void
     */
    public function initialize(array $config): void
    {
        $this->setTable('Provincia');
        $this->setPrimaryKey('PROVINCIAID');
        $this->hasMany('StateToProvincia')->setForeignKey('PROVINCIA');
    }
}
