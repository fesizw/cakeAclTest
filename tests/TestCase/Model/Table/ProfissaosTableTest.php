<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfissaosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfissaosTable Test Case
 */
class ProfissaosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfissaosTable
     */
    public $Profissaos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.profissaos',
        'app.empresas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Profissaos') ? [] : ['className' => ProfissaosTable::class];
        $this->Profissaos = TableRegistry::getTableLocator()->get('Profissaos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Profissaos);

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
