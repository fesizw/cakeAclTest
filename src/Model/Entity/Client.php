<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Client extends Entity {

    protected $_accessible = [
        'client_name' => true,
        'razao_social' => true,
        'cpf' => true,
        'cnpj' => true,
        'created' => true,
        'modified' => true,
        'users' => true,
        'user_id' => true,
        'filials' => true,
        'filial_id' => true
            // 'companys' => true
    ];

}
