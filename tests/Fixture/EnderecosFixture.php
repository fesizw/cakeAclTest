<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EnderecosFixture
 *
 */
class EnderecosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'idEndereco', 'autoIncrement' => true, 'precision' => null],
        'logradouro' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'endereco', 'precision' => null, 'fixed' => null],
        'numero' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'numero', 'precision' => null, 'fixed' => null],
        'bairro' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'bairro', 'precision' => null, 'fixed' => null],
        'cidade' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'cidade', 'precision' => null, 'fixed' => null],
        'estado' => ['type' => 'string', 'fixed' => true, 'length' => 2, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'estado', 'precision' => null],
        'cep' => ['type' => 'integer', 'length' => 9, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'cep', 'precision' => null, 'autoIncrement' => null],
        'complemento' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'complemento', 'precision' => null, 'fixed' => null],
        'observacao' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'obs', 'precision' => null],
        'comprovante_residencia' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'comprecli', 'precision' => null],
        'status' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'exibir, situacao', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'dataCadastro', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'tipo_endereco_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cliente_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'codcli', 'precision' => null, 'autoIncrement' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'quemlancou (so nome)', 'precision' => null, 'autoIncrement' => null],
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
                'logradouro' => 'Lorem ipsum dolor sit amet',
                'numero' => 'Lorem ipsum dolor sit amet',
                'bairro' => 'Lorem ipsum dolor sit amet',
                'cidade' => 'Lorem ipsum dolor sit amet',
                'estado' => 'Lo',
                'cep' => 1,
                'complemento' => 'Lorem ipsum dolor sit amet',
                'observacao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'comprovante_residencia' => 1,
                'status' => 1,
                'created' => '2019-01-09 12:31:18',
                'modified' => '2019-01-09 12:31:18',
                'tipo_endereco_id' => 1,
                'cliente_id' => 1,
                'user_id' => 1,
                'empresa_id' => 1
            ],
        ];
        parent::init();
    }
}
