<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TipoEndereco Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Endereco[] $enderecos
 */
class TipoEndereco extends Entity
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
        'nome' => true,
        'descricao' => true,
        'created' => true,
        'modified' => true,
        'enderecos' => true
    ];
}
