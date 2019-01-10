<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstadoCivilsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstadoCivilsTable Test Case
 */
class EstadoCivilsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EstadoCivilsTable
     */
    public $EstadoCivils;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.estado_civils',
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
        $config = TableRegistry::getTableLocator()->exists('EstadoCivils') ? [] : ['className' => EstadoCivilsTable::class];
        $this->EstadoCivils = TableRegistry::getTableLocator()->get('EstadoCivils', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EstadoCivils);

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
