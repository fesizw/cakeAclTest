<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CapacidadeCivilsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CapacidadeCivilsTable Test Case
 */
class CapacidadeCivilsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CapacidadeCivilsTable
     */
    public $CapacidadeCivils;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CapacidadeCivils',
        'app.Empresas',
        'app.Clientes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CapacidadeCivils') ? [] : ['className' => CapacidadeCivilsTable::class];
        $this->CapacidadeCivils = TableRegistry::getTableLocator()->get('CapacidadeCivils', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CapacidadeCivils);

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
