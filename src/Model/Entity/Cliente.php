<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string $name
 * @property string $filiacao_materna
 * @property string $nacionalidade
 * @property string $naturalidade
 * @property string $rg
 * @property string $orgao_exp_rg
 * @property string $cpf
 * @property string $cnpj
 * @property string $ctps
 * @property string $pis_pasep
 * @property \Cake\I18n\FrozenDate $data_nascimento
 * @property string $origem
 * @property string $observacao
 * @property string $cad_senha
 * @property string $foto
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $tipo_cliente_id
 * @property int $capacidade_civil_id
 * @property int $estado_civil_id
 * @property int $user_id
 * @property int $profissao_id
 * @property int $sexo_id
 * @property int $unidade_id
 * @property int $empresa_id
 *
 * @property \App\Model\Entity\TipoCliente $tipo_cliente
 * @property \App\Model\Entity\CapacidadeCivil $capacidade_civil
 * @property \App\Model\Entity\EstadoCivil $estado_civil
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Profissao $profissao
 * @property \App\Model\Entity\Sexo $sexo
 * @property \App\Model\Entity\Unidade $unidade
 * @property \App\Model\Entity\Empresa $empresa
 * @property \App\Model\Entity\Email[] $emails
 * @property \App\Model\Entity\Endereco[] $enderecos
 * @property \App\Model\Entity\Representante[] $representantes
 * @property \App\Model\Entity\Telefone[] $telefones
 */
class Cliente extends Entity
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
        'name' => true,
        'filiacao_materna' => true,
        'nacionalidade' => true,
        'naturalidade' => true,
        'rg' => true,
        'orgao_exp_rg' => true,
        'cpf' => true,
        'cnpj' => true,
        'ctps' => true,
        'pis_pasep' => true,
        'data_nascimento' => true,
        'origem' => true,
        'observacao' => true,
        'cad_senha' => true,
        'foto' => true,
        'created' => true,
        'modified' => true,
        'tipo_cliente_id' => true,
        'capacidade_civil_id' => true,
        'estado_civil_id' => true,
        'user_id' => true,
        'profissao_id' => true,
        'sexo_id' => true,
        'unidade_id' => true,
        'empresa_id' => true,
        'tipo_cliente' => true,
        'capacidade_civil' => true,
        'estado_civil' => true,
        'user' => true,
        'profissao' => true,
        'sexo' => true,
        'unidade' => true,
        'empresa' => true,
        'emails' => true,
        'enderecos' => true,
        'representantes' => true,
        'telefones' => true
    ];
}
