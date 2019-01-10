<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LoginTab Model
 *
 * @method \App\Model\Entity\LoginTab get($primaryKey, $options = [])
 * @method \App\Model\Entity\LoginTab newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LoginTab[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LoginTab|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LoginTab|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LoginTab patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LoginTab[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LoginTab findOrCreate($search, callable $callback = null, $options = [])
 */
class LoginTabTable extends Table {

    public static function defaultConnectionName() {
        return 'homologation';
    }

    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('login_tab');
        $this->setDisplayField('cod_autorizador');
        $this->setPrimaryKey('cod_autorizador');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->integer('cod_autorizador')
                ->allowEmpty('cod_autorizador', 'create');

        $validator
                ->scalar('nome_autorizador')
                ->maxLength('nome_autorizador', 50)
                ->allowEmpty('nome_autorizador');

        $validator
                ->scalar('senha_autorizador')
                ->maxLength('senha_autorizador', 50)
                ->allowEmpty('senha_autorizador');

        $validator
                ->boolean('online')
                ->allowEmpty('online');

        $validator
                ->boolean('Usuários')
                ->allowEmpty('Usuários');

        $validator
                ->integer('formulario')
                ->allowEmpty('formulario');

        $validator
                ->boolean('Alterar')
                ->allowEmpty('Alterar');

        $validator
                ->boolean('Relatorio')
                ->allowEmpty('Relatorio');

        $validator
                ->scalar('Setor')
                ->maxLength('Setor', 50)
                ->allowEmpty('Setor');

        $validator
                ->boolean('Apagar')
                ->allowEmpty('Apagar');

        $validator
                ->boolean('Funcionario')
                ->allowEmpty('Funcionario');

        $validator
                ->boolean('Honorario')
                ->allowEmpty('Honorario');

        $validator
                ->boolean('ContatoInicial')
                ->allowEmpty('ContatoInicial');

        $validator
                ->boolean('Supervisao')
                ->allowEmpty('Supervisao');

        $validator
                ->boolean('ContaCorrente')
                ->allowEmpty('ContaCorrente');

        $validator
                ->scalar('Situacao')
                ->maxLength('Situacao', 50)
                ->allowEmpty('Situacao');

        $validator
                ->scalar('unidade')
                ->maxLength('unidade', 50)
                ->allowEmpty('unidade');

        $validator
                ->boolean('ConfCOnt')
                ->allowEmpty('ConfCOnt');

        $validator
                ->boolean('Unid')
                ->allowEmpty('Unid');

        $validator
                ->boolean('Distrib')
                ->allowEmpty('Distrib');

        $validator
                ->boolean('GestJur')
                ->allowEmpty('GestJur');

        $validator
                ->boolean('Recep')
                ->allowEmpty('Recep');

        $validator
                ->boolean('GerencFinanc')
                ->allowEmpty('GerencFinanc');

        $validator
                ->boolean('GerenciaJur')
                ->allowEmpty('GerenciaJur');

        $validator
                ->boolean('GerencAdm')
                ->allowEmpty('GerencAdm');

        $validator
                ->boolean('GerencRecep')
                ->allowEmpty('GerencRecep');

        $validator
                ->scalar('GT')
                ->maxLength('GT', 50)
                ->allowEmpty('GT');

        $validator
                ->boolean('Autoriza')
                ->allowEmpty('Autoriza');

        $validator
                ->boolean('PedirValor')
                ->allowEmpty('PedirValor');

        $validator
                ->scalar('Profissao')
                ->maxLength('Profissao', 50)
                ->allowEmpty('Profissao');

        $validator
                ->boolean('SupervSetor')
                ->requirePresence('SupervSetor', 'create')
                ->notEmpty('SupervSetor');

        $validator
                ->boolean('Prazos')
                ->requirePresence('Prazos', 'create')
                ->notEmpty('Prazos');

        $validator
                ->boolean('JPA')
                ->requirePresence('JPA', 'create')
                ->notEmpty('JPA');

        $validator
                ->boolean('ADV')
                ->requirePresence('ADV', 'create')
                ->notEmpty('ADV');

        $validator
                ->boolean('DCC')
                ->requirePresence('DCC', 'create')
                ->notEmpty('DCC');

        $validator
                ->boolean('JPJEstag')
                ->requirePresence('JPJEstag', 'create')
                ->notEmpty('JPJEstag');

        $validator
                ->integer('codquadpessoal')
                ->allowEmpty('codquadpessoal');

        $validator
                ->boolean('homolog')
                ->allowEmpty('homolog');

        $validator
                ->boolean('isAtSimultaneo')
                ->allowEmpty('isAtSimultaneo');

        return $validator;
    }

}
