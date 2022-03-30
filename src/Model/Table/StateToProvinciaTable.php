<?php
declare(strict_types=1);

// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

/**
 * @property \App\Model\Table\CountriesTable&\Cake\ORM\Association\BelongsTo $Countries
 * @property \App\Model\Table\ProvinciaTable&\Cake\ORM\Association\BelongsTo $Provincia
 * @method \App\Model\Entity\StateToProvincium newEmptyEntity()
 * @method \App\Model\Entity\StateToProvincium newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\StateToProvincium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\StateToProvincium get($primaryKey, $options = [])
 * @method \App\Model\Entity\StateToProvincium findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\StateToProvincium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\StateToProvincium[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\StateToProvincium|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StateToProvincium saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StateToProvincium[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StateToProvincium[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\StateToProvincium[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StateToProvincium[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
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
