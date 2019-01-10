<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Email Entity
 *
 * @property int $id
 * @property string $email
 * @property string $descricao
 * @property bool $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $cliente_id
 * @property int $user_id
 * @property int $empresa_id
 *
 * @property \App\Model\Entity\Cliente $cliente
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Empresa $empresa
 */
class Email extends Entity
{

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
        'email' => true,
        'descricao' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'cliente_id' => true,
        'user_id' => true,
        'empresa_id' => true,
        'cliente' => true,
        'user' => true,
        'empresa' => true
    ];
}
