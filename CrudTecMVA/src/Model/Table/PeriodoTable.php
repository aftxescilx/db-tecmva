<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Periodo Model
 *
 * @method \App\Model\Entity\Periodo newEmptyEntity()
 * @method \App\Model\Entity\Periodo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Periodo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Periodo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Periodo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Periodo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Periodo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Periodo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Periodo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Periodo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Periodo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Periodo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Periodo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PeriodoTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('periodo');
        $this->setDisplayField('idPeriodo');
        $this->setPrimaryKey('idPeriodo');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->boolean('estatus')
            ->notEmptyString('estatus');

        $validator
            ->integer('idUsuarioCrea')
            ->requirePresence('idUsuarioCrea', 'create')
            ->notEmptyString('idUsuarioCrea');

        $validator
            ->dateTime('fechaCrea')
            ->requirePresence('fechaCrea', 'create')
            ->notEmptyDateTime('fechaCrea');

        $validator
            ->integer('idUsuarioModifica')
            ->allowEmptyString('idUsuarioModifica');

        $validator
            ->dateTime('fechaModifica')
            ->allowEmptyDateTime('fechaModifica');

        return $validator;
    }
}
