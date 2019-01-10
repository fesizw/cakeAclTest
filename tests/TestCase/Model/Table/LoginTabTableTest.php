<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LoginTabTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LoginTabTable Test Case
 */
class LoginTabTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LoginTabTable
     */
    public $LoginTab;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.login_tab'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LoginTab') ? [] : ['className' => LoginTabTable::class];
        $this->LoginTab = TableRegistry::getTableLocator()->get('LoginTab', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LoginTab);

        parent::tearDown();
    }

    /**
     * Test defaultConnectionName method
     *
     * @return void
     */
    public function testDefaultConnectionName()
    {
        $this->markTestIncomplete('Not implemented yet.');
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
