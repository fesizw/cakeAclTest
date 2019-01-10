<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Company extends Entity {

    protected $_accessible = [
        'company_name' => true,
        'description' => true,
        'cnpj' => true,
        'cpf' => true,
        'created' => true,
        'modified' => true
    ];

}
