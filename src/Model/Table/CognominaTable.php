<?php
declare(strict_types=1);

// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

/**
 * @method \App\Model\Entity\Cognomina newEmptyEntity()
 * @method \App\Model\Entity\Cognomina newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Cognomina[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cognomina get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cognomina findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Cognomina patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cognomina[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cognomina|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cognomina saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cognomina[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cognomina[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cognomina[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cognomina[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CognominaTable extends Table
{
    /**
     * Sets up table and table relationships
     *
     * @param array $config - not needed but kept for inheritence reasons
     * @return void
     */
    public function initialize(array $config): void
    {
        $this->setTable('Cognomina_Et_Agnomina');
        $this->setPrimaryKey('COGNOMENID');
    }
}
