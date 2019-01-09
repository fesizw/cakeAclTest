<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string|null $nome_cliente
 * @property string|null $filiacao_materna
 * @property string|null $nacionalidade
 * @property string|null $naturalidade
 * @property string|null $rg
 * @property string|null $orgao_exp_rg
 * @property string|null $cpf
 * @property string|null $cnpj
 * @property string|null $ctps
 * @property string|null $pis_pasep
 * @property \Cake\I18n\FrozenTime|null $data_nascimento
 * @property string|null $origem
 * @property string|null $observacao
 * @property string|null $cad_senha
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $tipo_cliente_id
 * @property int $capacidade_civil_id
 * @property int $estado_civil_id
 * @property int $usuario_id
 * @property int $profissão_id
 * @property int $sexo_id
 * @property int $unidade_id
 * @property int $empresa_id
 *
 * @property \App\Model\Entity\TipoCliente $tipo_cliente
 * @property \App\Model\Entity\CapacidadeCivil $capacidade_civil
 * @property \App\Model\Entity\EstadoCivil $estado_civil
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\Profissão $profissão
 * @property \App\Model\Entity\Sexo $sexo
 * @property \App\Model\Entity\Unidade $unidade
 * @property \App\Model\Entity\Empresa $empresa
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
        'nome_cliente' => true,
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
        'created' => true,
        'modified' => true,
        'tipo_cliente_id' => true,
        'capacidade_civil_id' => true,
        'estado_civil_id' => true,
        'usuario_id' => true,
        'profissão_id' => true,
        'sexo_id' => true,
        'unidade_id' => true,
        'empresa_id' => true,
        'tipo_cliente' => true,
        'capacidade_civil' => true,
        'estado_civil' => true,
        'usuario' => true,
        'profissão' => true,
        'sexo' => true,
        'unidade' => true,
        'empresa' => true
    ];
}
