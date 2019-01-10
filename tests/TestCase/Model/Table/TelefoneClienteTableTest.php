<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TelefoneClienteTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TelefoneClienteTable Test Case
 */
class TelefoneClienteTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TelefoneClienteTable
     */
    public $TelefoneCliente;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.telefone_cliente',
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
        $config = TableRegistry::getTableLocator()->exists('TelefoneCliente') ? [] : ['className' => TelefoneClienteTable::class];
        $this->TelefoneCliente = TableRegistry::getTableLocator()->get('TelefoneCliente', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TelefoneCliente);

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
