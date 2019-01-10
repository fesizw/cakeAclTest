<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Empresa Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $cpf
 * @property string $cnpj
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\CapacidadeCivil[] $capacidade_civils
 * @property \App\Model\Entity\Cliente[] $clientes
 * @property \App\Model\Entity\Email[] $emails
 * @property \App\Model\Entity\Endereco[] $enderecos
 * @property \App\Model\Entity\EstadoCivil[] $estado_civils
 * @property \App\Model\Entity\Grupo[] $grupos
 * @property \App\Model\Entity\Profissao[] $profissaos
 * @property \App\Model\Entity\Sexo[] $sexos
 * @property \App\Model\Entity\Telefone[] $telefones
 * @property \App\Model\Entity\TipoCliente[] $tipo_clientes
 * @property \App\Model\Entity\Unidade[] $unidades
 * @property \App\Model\Entity\User[] $users
 */
class Empresa extends Entity
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
        'cpf' => true,
        'cnpj' => true,
        'created' => true,
        'modified' => true,
        'capacidade_civils' => true,
        'clientes' => true,
        'emails' => true,
        'enderecos' => true,
        'estado_civils' => true,
        'grupos' => true,
        'profissaos' => true,
        'sexos' => true,
        'telefones' => true,
        'tipo_clientes' => true,
        'unidades' => true,
        'users' => true
    ];
}
