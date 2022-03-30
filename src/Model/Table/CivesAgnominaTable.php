<?php
declare(strict_types=1);

// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

/**
 * @property \App\Model\Table\CivesTable&\Cake\ORM\Association\BelongsTo $Cives
 * @property \App\Model\Table\CognominaTable&\Cake\ORM\Association\HasMany $Cognomina
 */
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
