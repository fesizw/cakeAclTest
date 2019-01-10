<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TipoEnderecos Model
 *
 * @property \App\Model\Table\EnderecosTable|\Cake\ORM\Association\HasMany $Enderecos
 *
 * @method \App\Model\Entity\TipoEndereco get($primaryKey, $options = [])
 * @method \App\Model\Entity\TipoEndereco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TipoEndereco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TipoEndereco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TipoEndereco|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TipoEndereco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TipoEndereco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TipoEndereco findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TipoEnderecosTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('tipo_enderecos');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Enderecos', [
            'foreignKey' => 'tipo_endereco_id'
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
                ->scalar('nome')
                ->maxLength('nome', 80)
                ->requirePresence('nome', 'create')
                ->notEmpty('nome');

        $validator
                ->scalar('descricao')
                ->allowEmpty('descricao');

        return $validator;
    }

}
