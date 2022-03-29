<?php
declare(strict_types=1);

// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class CivilServicesTable extends Table
{
    /**
     * Sets up table and table relationships
     *
     * @param array $config - not needed but kept for inheritence reasons
     * @return void
     */
    public function initialize(array $config): void
    {
        $this->setTable('Civil_Services');
        $this->setPrimaryKey('SERVICEID');
        $this->belongsToMany('Cives', ['through' => 'CivilServiceRecord']);
    }
}
