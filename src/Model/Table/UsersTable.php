<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\GruposTable|\Cake\ORM\Association\BelongsTo $Grupos
 * @property \App\Model\Table\UnidadesTable|\Cake\ORM\Association\BelongsTo $Unidades
 * @property \App\Model\Table\EmpresasTable|\Cake\ORM\Association\BelongsTo $Empresas
 * @property \App\Model\Table\EmailsTable|\Cake\ORM\Association\HasMany $Emails
 * @property \App\Model\Table\EnderecosTable|\Cake\ORM\Association\HasMany $Enderecos
 * @property |\Cake\ORM\Association\HasMany $Telefones
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Grupos', [
            'foreignKey' => 'grupo_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Unidades', [
            'foreignKey' => 'unidade_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Emails', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Enderecos', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Telefones', [
            'foreignKey' => 'user_id'
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
                ->maxLength('nome', 250)
                ->requirePresence('nome', 'create')
                ->notEmpty('nome');

        $validator
                ->scalar('login')
                ->maxLength('login', 60)
                ->requirePresence('login', 'create')
                ->notEmpty('login');

        $validator
                ->scalar('senha')
                ->maxLength('senha', 60)
                ->allowEmpty([
                    'senha' => [
                        'mode' => 'update',
                        'message' => __('A password is required.')
                    ]
                ])
                ->requirePresence([
                    'senha' => [
                        'mode' => 'create',
                        'message' => __('A password is required.')
                    ]
        ]);

        $validator
                ->scalar('foto')
                ->maxLength('foto', 200)
                ->allowEmpty('foto');

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
        $rules->add($rules->isUnique(['login']));
        $rules->add($rules->existsIn(['grupo_id'], 'Grupos'));
        $rules->add($rules->existsIn(['unidade_id'], 'Unidades'));
        $rules->add($rules->existsIn(['empresa_id'], 'Empresas'));

        return $rules;
    }

}
