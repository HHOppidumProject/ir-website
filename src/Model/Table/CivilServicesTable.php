<?php
declare(strict_types=1);

// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

/**
 * @property \App\Model\Table\CivesTable&\Cake\ORM\Association\BelongsToMany $Cives
 * @property \App\Model\Table\CivilServiceRecordTable&\Cake\ORM\Association\HasMany $CivilServiceRecord
 * @method \App\Model\Entity\CivilService newEmptyEntity()
 * @method \App\Model\Entity\CivilService newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CivilService[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CivilService get($primaryKey, $options = [])
 * @method \App\Model\Entity\CivilService findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CivilService patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CivilService[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CivilService|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CivilService saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CivilService[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CivilService[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CivilService[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CivilService[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
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
