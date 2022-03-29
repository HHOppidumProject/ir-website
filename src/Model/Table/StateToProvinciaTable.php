<?php
declare(strict_types=1);

// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class StateToProvinciaTable extends Table
{
    /**
     * Sets up table and table relationships
     *
     * @param array $config - not needed but kept for inheritence reasons
     * @return void
     */
    public function initialize(array $config): void
    {
        $this->setTable('State_To_Provincia');
        $this->setPrimaryKey('STATEID');
        $this->belongsTo('Countries')->setForeignKey('COUNTRY')->setJoinType('INNER');

        $this->belongsTo('Provincia')->setForeignKey('PROVINCIA')->setJoinType('INNER');
    }
}
