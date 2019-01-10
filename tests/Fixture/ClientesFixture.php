<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClientesFixture
 *
 */
class ClientesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'CÓDIGO', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'NomeCliente', 'precision' => null, 'fixed' => null],
        'filiacao_materna' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'FiliaçãoMaterna', 'precision' => null, 'fixed' => null],
        'nacionalidade' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Nacionalidade', 'precision' => null, 'fixed' => null],
        'naturalidade' => ['type' => 'string', 'length' => 80, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Natural de', 'precision' => null, 'fixed' => null],
        'rg' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'RG', 'precision' => null, 'fixed' => null],
        'orgao_exp_rg' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Órgão exp RG', 'precision' => null, 'fixed' => null],
        'cpf' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'CPF/MF', 'precision' => null, 'fixed' => null],
        'cnpj' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'CNPJ/MF', 'precision' => null, 'fixed' => null],
        'ctps' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'CTPS', 'precision' => null, 'fixed' => null],
        'pis_pasep' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'PIS/PASEP', 'precision' => null, 'fixed' => null],
        'data_nascimento' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'DataNascimento', 'precision' => null],
        'origem' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Origem2', 'precision' => null, 'fixed' => null],
        'observacao' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Observação', 'precision' => null],
        'cad_senha' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'CadSenha', 'precision' => null, 'fixed' => null],
        'foto' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'CadastroGeral', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'dt_modificacao', 'precision' => null],
        'tipo_cliente_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'id_tipo_cliente', 'precision' => null, 'autoIncrement' => null],
        'capacidade_civil_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'CapacidadeCivil (usando apenas nome)', 'precision' => null, 'autoIncrement' => null],
        'estado_civil_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'CodEstCivil', 'precision' => null, 'autoIncrement' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Quem Lançou', 'precision' => null, 'autoIncrement' => null],
        'profissao_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'CodProf', 'precision' => null, 'autoIncrement' => null],
        'sexo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'CodSexo', 'precision' => null, 'autoIncrement' => null],
        'unidade_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Unidade (usando apenas o nome)', 'precision' => null, 'autoIncrement' => null],
        'empresa_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
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
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'filiacao_materna' => 'Lorem ipsum dolor sit amet',
                'nacionalidade' => 'Lorem ipsum dolor sit amet',
                'naturalidade' => 'Lorem ipsum dolor sit amet',
                'rg' => 'Lorem ipsum dolor sit amet',
                'orgao_exp_rg' => 'Lorem ipsum dolor sit amet',
                'cpf' => 'Lorem ipsum dolor ',
                'cnpj' => 'Lorem ipsum dolor ',
                'ctps' => 'Lorem ipsum dolor sit amet',
                'pis_pasep' => 'Lorem ipsum dolor sit amet',
                'data_nascimento' => '2019-01-09',
                'origem' => 'Lorem ipsum dolor sit amet',
                'observacao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'cad_senha' => 'Lorem ipsum dolor sit amet',
                'foto' => 'Lorem ipsum dolor sit amet',
                'created' => '2019-01-09 16:40:57',
                'modified' => '2019-01-09 16:40:57',
                'tipo_cliente_id' => 1,
                'capacidade_civil_id' => 1,
                'estado_civil_id' => 1,
                'user_id' => 1,
                'profissao_id' => 1,
                'sexo_id' => 1,
                'unidade_id' => 1,
                'empresa_id' => 1
            ],
        ];
        parent::init();
    }
}
