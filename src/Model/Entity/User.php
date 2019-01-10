<?php

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $login
 * @property string $senha
 * @property string $foto
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $grupo_id
 * @property int $unidade_id
 * @property int $empresa_id
 *
 * @property \App\Model\Entity\Grupo $grupo
 * @property \App\Model\Entity\Unidade $unidade
 * @property \App\Model\Entity\Empresa $empresa
 * @property \App\Model\Entity\Email[] $emails
 * @property \App\Model\Entity\Endereco[] $enderecos
 */
class User extends Entity {

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'login' => true,
        'senha' => true,
        'foto' => true,
        'created' => true,
        'modified' => true,
        'grupo_id' => true,
        'unidade_id' => true,
        'empresa_id' => true,
        'grupo' => true,
        'unidade' => true,
        'empresa' => true,
        'emails' => true,
        'enderecos' => true
    ];
    protected $_hidden = [
        'senha'
    ];

    protected function _setSenha($password) {
        return (new DefaultPasswordHasher)->hash($password);
    }

}
