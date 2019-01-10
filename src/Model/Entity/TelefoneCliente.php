<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TelefoneCliente Entity
 *
 * @property int $id
 * @property string $Tipo
 * @property string $DDD
 * @property string $numero
 * @property string $responsavel_recado
 * @property int $client_id
 *
 * @property \App\Model\Entity\Client $client
 */
class TelefoneCliente extends Entity
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
        'Tipo' => true,
        'DDD' => true,
        'numero' => true,
        'responsavel_recado' => true,
        'client_id' => true,
        'client' => true
    ];
}
