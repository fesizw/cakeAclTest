<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SexosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SexosTable Test Case
 */
class SexosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SexosTable
     */
    public $Sexos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sexos',
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
        $config = TableRegistry::getTableLocator()->exists('Sexos') ? [] : ['className' => SexosTable::class];
        $this->Sexos = TableRegistry::getTableLocator()->get('Sexos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sexos);

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
