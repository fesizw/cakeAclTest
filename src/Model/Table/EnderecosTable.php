<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Enderecos Model
 *
 * @property \App\Model\Table\TipoEnderecosTable|\Cake\ORM\Association\BelongsTo $TipoEnderecos
 * @property \App\Model\Table\ClientesTable|\Cake\ORM\Association\BelongsTo $Clientes
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\EmpresasTable|\Cake\ORM\Association\BelongsTo $Empresas
 *
 * @method \App\Model\Entity\Endereco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Endereco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Endereco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Endereco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Endereco|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Endereco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Endereco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Endereco findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EnderecosTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('enderecos');
        $this->setDisplayField('logradouro');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('TipoEnderecos', [
            'foreignKey' => 'tipo_endereco_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Clientes', [
            'foreignKey' => 'cliente_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id',
            'joinType' => 'INNER'
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
                ->scalar('logradouro')
                ->maxLength('logradouro', 255)
                ->requirePresence('logradouro', 'create')
                ->notEmpty('logradouro');

        $validator
                ->scalar('numero')
                ->maxLength('numero', 50)
                ->allowEmpty('numero');

        $validator
                ->scalar('bairro')
                ->maxLength('bairro', 100)
                ->allowEmpty('bairro');

        $validator
                ->scalar('cidade')
                ->maxLength('cidade', 60)
                ->allowEmpty('cidade');

        $validator
                ->scalar('estado')
                ->maxLength('estado', 2)
                ->requirePresence('estado', 'create')
                ->notEmpty('estado');

        $validator
                ->integer('cep')
                ->allowEmpty('cep');

        $validator
                ->scalar('complemento')
                ->maxLength('complemento', 60)
                ->allowEmpty('complemento');

        $validator
                ->scalar('observacao')
                ->allowEmpty('observacao');

        $validator
                ->boolean('comprovante_residencia')
                ->requirePresence('comprovante_residencia', 'create')
                ->notEmpty('comprovante_residencia');

        $validator
                ->boolean('status')
                ->requirePresence('status', 'create')
                ->notEmpty('status');

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
        $rules->add($rules->existsIn(['tipo_endereco_id'], 'TipoEnderecos'));
        $rules->add($rules->existsIn(['cliente_id'], 'Clientes'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['empresa_id'], 'Empresas'));

        return $rules;
    }

}
