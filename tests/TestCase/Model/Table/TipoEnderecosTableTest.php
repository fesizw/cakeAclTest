<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoEnderecosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoEnderecosTable Test Case
 */
class TipoEnderecosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoEnderecosTable
     */
    public $TipoEnderecos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipo_enderecos',
        'app.enderecos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TipoEnderecos') ? [] : ['className' => TipoEnderecosTable::class];
        $this->TipoEnderecos = TableRegistry::getTableLocator()->get('TipoEnderecos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TipoEnderecos);

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
}
