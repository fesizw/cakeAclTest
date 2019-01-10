<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EnderecoCliente Entity
 *
 * @property int $id
 * @property string $cep
 * @property string $endereco
 * @property string $numero
 * @property string $estado
 * @property string $tipo
 * @property string $cidade
 * @property string $bairro
 * @property string $complemento
 * @property string $observacao
 * @property string $comprovante_cliente
 * @property int $client_id
 *
 * @property \App\Model\Entity\Client $client
 */
class EnderecoCliente extends Entity
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
        'cep' => true,
        'endereco' => true,
        'numero' => true,
        'estado' => true,
        'tipo' => true,
        'cidade' => true,
        'bairro' => true,
        'complemento' => true,
        'observacao' => true,
        'comprovante_cliente' => true,
        'client_id' => true,
        'client' => true
    ];
}
