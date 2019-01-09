<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property string $nome
 * @property string|resource $login
 * @property string $senha
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $grupo_id
 * @property int $unidade_id
 * @property int $empresa_id
 *
 * @property \App\Model\Entity\Grupo $grupo
 * @property \App\Model\Entity\Unidade $unidade
 * @property \App\Model\Entity\Empresa $empresa
 * @property \App\Model\Entity\Cliente[] $clientes
 */
class Usuario extends Entity {

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
        'created' => true,
        'modified' => true,
        'grupo_id' => true,
        'unidade_id' => true,
        'empresa_id' => true,
        'grupo' => true,
        'unidade' => true,
        'empresa' => true,
        'clientes' => true
    ];

    protected function _setPassword($pass) {
        if (strlen($pass) > 0) {
            return (new DefaultPasswordHasher)->hash($pass);
        }
    }

}
