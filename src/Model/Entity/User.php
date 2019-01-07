<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author fesizw
 */

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class User extends Entity {

    protected $_accessible = [
        'username' => true,
        'password' => true,
        'group_id' => true,
        'created' => true,
        'modified' => true,
        'group' => true,
        'posts' => true,
        'emails' => true
    ];
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($pass) {
        if (strlen($pass) > 0) {
            return (new DefaultPasswordHasher)->hash($pass);
        }
    }

}
