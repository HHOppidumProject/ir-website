<?php
declare(strict_types=1);

// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;

/**
 * @property \App\Model\Table\CivesTable&\Cake\ORM\Association\BelongsTo $Cives
 * @property \App\Model\Table\CivilServicesTable&\Cake\ORM\Association\BelongsTo $CivilServices
 * @method \App\Model\Entity\CivilServiceRecord newEmptyEntity()
 * @method \App\Model\Entity\CivilServiceRecord newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CivilServiceRecord[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CivilServiceRecord get($primaryKey, $options = [])
 * @method \App\Model\Entity\CivilServiceRecord findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CivilServiceRecord patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CivilServiceRecord[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CivilServiceRecord|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CivilServiceRecord saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CivilServiceRecord[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CivilServiceRecord[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CivilServiceRecord[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CivilServiceRecord[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CivilServiceRecordTable extends Table
{
    /**
     * Sets up table and table relationships
     *
     * @param array $config - not needed but kept for inheritence reasons
     * @return void
     */
    public function initialize(array $config): void
    {
        $this->setTable('Civil_Service_Record');
        $this->setPrimaryKey('RECORDENTRY');
        $this->belongsTo('Cives')->setForeignKey('CIVIS');
        $this->belongsTo('CivilServices')->setForeignKey('SERVICE');
    }

    /**
     * Find the civil service record of a civis by the citizen's ID
     *
     * @param string $civisid - CIVIS ID
     * @return \Cake\ORM\Query
     */
    public function findByCivisId(string $civisid): Query
    {
        return $this->find('all', [
            'conditions' => ['CIVIS' => $civisid],
        ]);
    }
}
