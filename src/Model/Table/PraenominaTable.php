<?php
declare(strict_types=1);

// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

/**
 * @property \App\Model\Table\CivesTable&\Cake\ORM\Association\BelongsTo $Cives
 * @method \App\Model\Entity\Praenomina newEmptyEntity()
 * @method \App\Model\Entity\Praenomina newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Praenomina[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Praenomina get($primaryKey, $options = [])
 * @method \App\Model\Entity\Praenomina findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Praenomina patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Praenomina[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Praenomina|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Praenomina saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Praenomina[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Praenomina[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Praenomina[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Praenomina[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PraenominaTable extends Table
{
    /**
     * Sets up table and table relationships
     *
     * @param array $config - not needed but kept for inheritence reasons
     * @return void
     */
    public function initialize(array $config): void
    {
        $this->setTable('Praenomina');
        $this->setPrimaryKey('PRAENOMENID');
        $this->belongsTo('Cives');
    }
}
