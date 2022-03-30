<?php
declare(strict_types=1);

// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

/**
 * @property \App\Model\Table\CivesTable&\Cake\ORM\Association\BelongsTo $Cives
 * @method \App\Model\Entity\Nomina newEmptyEntity()
 * @method \App\Model\Entity\Nomina newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Nomina[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Nomina get($primaryKey, $options = [])
 * @method \App\Model\Entity\Nomina findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Nomina patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Nomina[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Nomina|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Nomina saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Nomina[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Nomina[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Nomina[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Nomina[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class NominaTable extends Table
{
    /**
     * Sets up table and table relationships
     *
     * @param array $config - not needed but kept for inheritence reasons
     * @return void
     */
    public function initialize(array $config): void
    {
        $this->setTable('Nomina');
        $this->setPrimaryKey('NOMENID');
        $this->belongsTo('Cives');
    }
}
