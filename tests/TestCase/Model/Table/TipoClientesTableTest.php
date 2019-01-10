<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoClientesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoClientesTable Test Case
 */
class TipoClientesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoClientesTable
     */
    public $TipoClientes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipo_clientes',
        'app.empresas',
        'app.clientes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TipoClientes') ? [] : ['className' => TipoClientesTable::class];
        $this->TipoClientes = TableRegistry::getTableLocator()->get('TipoClientes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TipoClientes);

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
