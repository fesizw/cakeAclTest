<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EnderecoCliente Model
 *
 * @property \App\Model\Table\ClientsTable|\Cake\ORM\Association\BelongsTo $Clients
 *
 * @method \App\Model\Entity\EnderecoCliente get($primaryKey, $options = [])
 * @method \App\Model\Entity\EnderecoCliente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EnderecoCliente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EnderecoCliente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EnderecoCliente|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EnderecoCliente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EnderecoCliente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EnderecoCliente findOrCreate($search, callable $callback = null, $options = [])
 */
class EnderecoClienteTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('endereco_cliente');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
            'joinType' => 'INNER'
        ])->setDisplayField('client_name');
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
                ->scalar('cep')
                ->maxLength('cep', 9)
                ->requirePresence('cep', 'create')
                ->notEmpty('cep');

        $validator
                ->scalar('endereco')
                ->maxLength('endereco', 255)
                ->requirePresence('endereco', 'create')
                ->notEmpty('endereco');

        $validator
                ->scalar('numero')
                ->maxLength('numero', 100)
                ->allowEmpty('numero');

        $validator
                ->scalar('estado')
                ->maxLength('estado', 2)
                ->requirePresence('estado', 'create')
                ->notEmpty('estado');

        $validator
                ->scalar('tipo')
                ->maxLength('tipo', 150)
                ->requirePresence('tipo', 'create')
                ->notEmpty('tipo');

        $validator
                ->scalar('cidade')
                ->maxLength('cidade', 150)
                ->allowEmpty('cidade');

        $validator
                ->scalar('bairro')
                ->maxLength('bairro', 150)
                ->allowEmpty('bairro');

        $validator
                ->scalar('complemento')
                ->maxLength('complemento', 255)
                ->allowEmpty('complemento');

        $validator
                ->scalar('observacao')
                ->allowEmpty('observacao');

        $validator
                ->scalar('comprovante_cliente')
                ->requirePresence('comprovante_cliente', 'create')
                ->add('comprovante_cliente', 'custom', ['rule' =>
                    function ($comprovante_cleinte) {
                        IF ($comprovante_cleinte == 'S' || $comprovante_cleinte == 'N') {
                            return TRUE;
                        } ELSE {
                            debug($comprovante_cleinte);
                            return FALSE;
                        }
                    }, 'message' => __('Invalid data')
        ]);

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
        $rules->add($rules->existsIn(['client_id'], 'Clients'));

        return $rules;
    }

}
