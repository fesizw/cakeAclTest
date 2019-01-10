<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Endereco Entity
 *
 * @property int $id
 * @property string $logradouro
 * @property string $numero
 * @property string $bairro
 * @property string $cidade
 * @property string $estado
 * @property int $cep
 * @property string $complemento
 * @property string $observacao
 * @property bool $comprovante_residencia
 * @property bool $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $tipo_endereco_id
 * @property int $cliente_id
 * @property int $user_id
 * @property int $empresa_id
 *
 * @property \App\Model\Entity\TipoEndereco $tipo_endereco
 * @property \App\Model\Entity\Cliente $cliente
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Empresa $empresa
 */
class Endereco extends Entity
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
        'logradouro' => true,
        'numero' => true,
        'bairro' => true,
        'cidade' => true,
        'estado' => true,
        'cep' => true,
        'complemento' => true,
        'observacao' => true,
        'comprovante_residencia' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'tipo_endereco_id' => true,
        'cliente_id' => true,
        'user_id' => true,
        'empresa_id' => true,
        'tipo_endereco' => true,
        'cliente' => true,
        'user' => true,
        'empresa' => true
    ];
}
