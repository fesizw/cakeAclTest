<?php

namespace App\Model\Table;

use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class EnderecoClienteTable extends Table {

    public static function defaultConnectionName() {
//        return 'default_SQL';
        return 'homologation';
    }

    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('EnderevoTCLiente');
        $this->setDisplayField('idEndereco');
        $this->setPrimaryKey('idEndereco');

        $this->belongsTo('CadastroCliente', [
            'foreignKey' => 'codcli',
            'joinType' => 'INNER'
        ])->setDisplayField('NomeCliente');
    }

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
