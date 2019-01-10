<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Representante Entity
 *
 * @property int $id
 * @property string $tipo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $representante_id
 * @property int $cliente_id
 *
 * @property \App\Model\Entity\Representante[] $representantes
 * @property \App\Model\Entity\Cliente $cliente
 */
class Representante extends Entity
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
        'tipo' => true,
        'created' => true,
        'modified' => true,
        'representante_id' => true,
        'cliente_id' => true,
        'representantes' => true,
        'cliente' => true
    ];
}
