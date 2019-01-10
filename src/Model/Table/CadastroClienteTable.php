<?php

namespace App\Model\Table;

use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class CadastroClienteTable extends Table {

    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('CadastroCliente');
        $this->setDisplayField('CÓDIGO');
        $this->setPrimaryKey('CÓDIGO');
        $this->hasMany('EnderecoTCliente', [
            'foreignKey' => 'codcli'
        ]);
    }

}
