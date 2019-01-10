<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LoginTabFixture
 *
 */
class LoginTabFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'login_tab';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'cod_autorizador' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'nome_autorizador' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'Latin1_General_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'senha_autorizador' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'Latin1_General_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'online' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        'Usuários' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        'backup' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        'formulario' => ['type' => 'integer', 'length' => 10, 'null' => true, 'default' => '0', 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'Alterar' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        'Relatorio' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        'Setor' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'Latin1_General_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'Apagar' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        'Funcionario' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        'Honorario' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        'ContatoInicial' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        'Supervisao' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        'ContaCorrente' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        'Situacao' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'Latin1_General_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'unidade' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'Latin1_General_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'ConfCOnt' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        'Unid' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        'Distrib' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        'GestJur' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        'Recep' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        'GerencFinanc' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        'GerenciaJur' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        'GerencAdm' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        'GerencRecep' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        'GT' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'Latin1_General_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'Autoriza' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        'PedirValor' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        'Profissao' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'Latin1_General_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'SupervSetor' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => 0, 'precision' => null, 'comment' => null],
        'Prazos' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => 0, 'precision' => null, 'comment' => null],
        'JPA' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => 0, 'precision' => null, 'comment' => null],
        'ADV' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => 0, 'precision' => null, 'comment' => null],
        'DCC' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => 0, 'precision' => null, 'comment' => null],
        'JPJEstag' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => 0, 'precision' => null, 'comment' => null],
        'codquadpessoal' => ['type' => 'integer', 'length' => 10, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'homolog' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        'isAtSimultaneo' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => 0, 'precision' => null, 'comment' => null],
        '_indexes' => [
            'unk_codquadpessoal' => ['type' => 'index', 'columns' => ['codquadpessoal'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cod_autorizador'], 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'cod_autorizador' => 1,
                'nome_autorizador' => 'Lorem ipsum dolor sit amet',
                'senha_autorizador' => 'Lorem ipsum dolor sit amet',
                'online' => 1,
                'Usuários' => 1,
                'backup' => 1,
                'formulario' => 1,
                'Alterar' => 1,
                'Relatorio' => 1,
                'Setor' => 'Lorem ipsum dolor sit amet',
                'Apagar' => 1,
                'Funcionario' => 1,
                'Honorario' => 1,
                'ContatoInicial' => 1,
                'Supervisao' => 1,
                'ContaCorrente' => 1,
                'Situacao' => 'Lorem ipsum dolor sit amet',
                'unidade' => 'Lorem ipsum dolor sit amet',
                'ConfCOnt' => 1,
                'Unid' => 1,
                'Distrib' => 1,
                'GestJur' => 1,
                'Recep' => 1,
                'GerencFinanc' => 1,
                'GerenciaJur' => 1,
                'GerencAdm' => 1,
                'GerencRecep' => 1,
                'GT' => 'Lorem ipsum dolor sit amet',
                'Autoriza' => 1,
                'PedirValor' => 1,
                'Profissao' => 'Lorem ipsum dolor sit amet',
                'SupervSetor' => 1,
                'Prazos' => 1,
                'JPA' => 1,
                'ADV' => 1,
                'DCC' => 1,
                'JPJEstag' => 1,
                'codquadpessoal' => 1,
                'homolog' => 1,
                'isAtSimultaneo' => 1
            ],
        ];
        parent::init();
    }
}
