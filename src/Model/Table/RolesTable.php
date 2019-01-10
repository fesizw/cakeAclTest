<?php

namespace App\Model\Table;

use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class RolesTable extends Table {

    public static function defaultConnectionName() {
        return 'developper';
    }

    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('roles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Filials', [
            'foreignKey' => 'filial_id',
            'joinType' => 'INNER'
        ])->setDisplayField('filial_name');
    }

    public function validationDefault(Validator $validator) {
        $validator
                ->integer('id')
                ->allowEmpty('id', 'create');

        $validator
                ->scalar('role_name')
                ->maxLength('role_name', 255)
                ->requirePresence('role_name', 'create')
                ->notEmpty('role_name');

        $validator
                ->scalar('roles')
                ->notEmpty('roles');

        $validator
                ->scalar('description')
                ->allowEmpty('description');

        $validator
                ->notEmpty('filial_id');

        return $validator;
    }

    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->existsIn(['filial_id'], 'Filials'));
        return $rules;
    }

}
