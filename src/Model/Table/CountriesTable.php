<?php
declare(strict_types=1);

// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class CountriesTable extends Table
{
    /**
     * Sets up table and table relationships
     *
     * @param array $config - not needed but kept for inheritence reasons
     * @return void
     */
    public function initialize(array $config): void
    {
        $this->setTable('Countries');
        $this->setPrimaryKey('COUNTRYID');
        $this->hasMany('StateToProvincia')->setForeignKey('COUNTRY');
    }
}
