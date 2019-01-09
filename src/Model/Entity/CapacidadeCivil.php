<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CapacidadeCivil Entity
 *
 * @property int $id
 * @property string $tipo_capacidade
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $empresa_id
 *
 * @property \App\Model\Entity\Empresa $empresa
 * @property \App\Model\Entity\Cliente[] $clientes
 */
class CapacidadeCivil extends Entity
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
        'tipo_capacidade' => true,
        'created' => true,
        'modified' => true,
        'empresa_id' => true,
        'empresa' => true,
        'clientes' => true
    ];
}
