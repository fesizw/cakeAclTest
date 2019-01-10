<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EstadoCivils Model
 *
 * @property \App\Model\Table\EmpresasTable|\Cake\ORM\Association\BelongsTo $Empresas
 * @property \App\Model\Table\ClientesTable|\Cake\ORM\Association\HasMany $Clientes
 *
 * @method \App\Model\Entity\EstadoCivil get($primaryKey, $options = [])
 * @method \App\Model\Entity\EstadoCivil newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EstadoCivil[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EstadoCivil|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EstadoCivil|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EstadoCivil patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EstadoCivil[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EstadoCivil findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EstadoCivilsTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('estado_civils');
        $this->setDisplayField('tipo_estado_civil');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Clientes', [
            'foreignKey' => 'estado_civil_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->integer('id')
                ->allowEmpty('id', 'create');

        $validator
                ->scalar('tipo_estado_civil')
                ->maxLength('tipo_estado_civil', 50)
                ->requirePresence('tipo_estado_civil', 'create')
                ->notEmpty('tipo_estado_civil');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->existsIn(['empresa_id'], 'Empresas'));

        return $rules;
    }

}
