<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Representantes Model
 *
 * @property \App\Model\Table\RepresentantesTable|\Cake\ORM\Association\BelongsTo $Representantes
 * @property \App\Model\Table\ClientesTable|\Cake\ORM\Association\BelongsTo $Clientes
 * @property \App\Model\Table\RepresentantesTable|\Cake\ORM\Association\HasMany $Representantes
 *
 * @method \App\Model\Entity\Representante get($primaryKey, $options = [])
 * @method \App\Model\Entity\Representante newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Representante[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Representante|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Representante|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Representante patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Representante[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Representante findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RepresentantesTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('representantes');
        $this->setDisplayField('tipo');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Representantes', [
            'foreignKey' => 'representante_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Clientes', [
            'foreignKey' => 'cliente_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Representantes', [
            'foreignKey' => 'representante_id'
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
                ->scalar('tipo')
                ->maxLength('tipo', 80)
                ->requirePresence('tipo', 'create')
                ->notEmpty('tipo');

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
        $rules->add($rules->existsIn(['representante_id'], 'Representantes'));
        $rules->add($rules->existsIn(['cliente_id'], 'Clientes'));

        return $rules;
    }

}
