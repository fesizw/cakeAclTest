<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EnderecoClienteTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EnderecoClienteTable Test Case
 */
class EnderecoClienteTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EnderecoClienteTable
     */
    public $EnderecoCliente;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.endereco_cliente',
        'app.clients'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EnderecoCliente') ? [] : ['className' => EnderecoClienteTable::class];
        $this->EnderecoCliente = TableRegistry::getTableLocator()->get('EnderecoCliente', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EnderecoCliente);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
