<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tipoorganizacion Model
 *
 * @method \App\Model\Entity\Tipoorganizacion newEmptyEntity()
 * @method \App\Model\Entity\Tipoorganizacion newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Tipoorganizacion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tipoorganizacion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tipoorganizacion findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Tipoorganizacion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tipoorganizacion[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tipoorganizacion|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tipoorganizacion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tipoorganizacion[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tipoorganizacion[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tipoorganizacion[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tipoorganizacion[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TipoorganizacionTable extends Table
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

        $this->setTable('tipoorganizacion');
        $this->setDisplayField('idTipoOrganizacion');
        $this->setPrimaryKey('idTipoOrganizacion');
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
