<?php
declare(strict_types=1);

// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * @property \App\Model\Table\StateToProvinciaTable&\Cake\ORM\Association\BelongsTo $StateToProvincia
 * @method \App\Model\Entity\CivesPriv newEmptyEntity()
 * @method \App\Model\Entity\CivesPriv newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CivesPriv[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CivesPriv get($primaryKey, $options = [])
 * @method \App\Model\Entity\CivesPriv findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CivesPriv patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CivesPriv[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CivesPriv|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CivesPriv saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CivesPriv[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CivesPriv[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CivesPriv[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CivesPriv[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CivesPrivTable extends Table
{
    /**
     * Sets up table and table relationships
     *
     * @param array $config - not needed but kept for inheritence reasons
     * @return void
     */
    public function initialize(array $config): void
    {
        $this->setTable('Cives_Priv');
        $this->setPrimaryKey('CIVIS');
        $this->belongsTo('StateToProvincia')->setForeignKey('STATE_PROVINCE')->setJoinType('INNER');
    }

    /**
     * Creates table validator:
     * Forename cannot be empty
     * Surname cannot be empty
     * City cannot be empty
     * State/Province cannot be empty and must be an integer
     * Phone Number cannot be empty
     * Postcode/Zip code cannot be empty
     * Occupation cannot be empty
     *
     * @param \Cake\Validation\Validator $validator - not needed but kept for inheritence reasons
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->notEmptyString('FORENAME')
            ->notEmptyString('SURNAME')
            ->notEmptyString('CITY')
            ->nonNegativeInteger('STATE_PROVINCE')
            ->integer('STATE_PROVINCE', 'Something went wrong!')
            ->notEmptyString('PHONE_NUMBER')
            ->notEmptyString('POSTCODE_ZIP')
            ->notEmptyString('OCCUPATION');

        return $validator;
    }
}
