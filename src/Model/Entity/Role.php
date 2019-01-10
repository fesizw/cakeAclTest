<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Role extends Entity {

    protected $_accessible = [
        'role_name' => true,
        'roles' => true,
        'description' => true,
        'created' => true,
        'modified' => true,
        'filial_id' => true,
        'filial' => true,
    ];

}
