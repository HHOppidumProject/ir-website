<?php
declare(strict_types=1);

// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

/**
 * @property \App\Model\Table\StateToProvinciaTable&\Cake\ORM\Association\HasMany $StateToProvincia
 * @method \App\Model\Entity\Provincium newEmptyEntity()
 * @method \App\Model\Entity\Provincium newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Provincium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Provincium get($primaryKey, $options = [])
 * @method \App\Model\Entity\Provincium findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Provincium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Provincium[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Provincium|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Provincium saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Provincium[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Provincium[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Provincium[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Provincium[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
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
