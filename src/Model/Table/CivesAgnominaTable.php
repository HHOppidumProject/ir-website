<?php
declare(strict_types=1);

// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class CivesAgnominaTable extends Table
{
    /**
     * Sets up table and table relationships
     *
     * @param array $config - not needed but kept for inheritence reasons
     * @return void
     */
    public function initialize(array $config): void
    {
        $this->setTable('Cives_Agnomina');
        $this->setPrimaryKey('IDCIVES-AGNOMIA');
        $this->belongsTo('Cives');
        $this->hasMany('Cognomina');
    }
}
