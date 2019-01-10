<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Telefone Entity
 *
 * @property int $id
 * @property bool $status
 * @property string $numero
 * @property string $observacao
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 * @property int $cliente_id
 * @property int $unidade_id
 * @property int $empresa_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Cliente $cliente
 * @property \App\Model\Entity\Unidade $unidade
 * @property \App\Model\Entity\Empresa $empresa
 */
class Telefone extends Entity
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
        'status' => true,
        'numero' => true,
        'observacao' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'cliente_id' => true,
        'unidade_id' => true,
        'empresa_id' => true,
        'user' => true,
        'cliente' => true,
        'unidade' => true,
        'empresa' => true
    ];
}
