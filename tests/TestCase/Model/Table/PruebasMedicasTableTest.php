<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PruebasMedicasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PruebasMedicasTable Test Case
 */
class PruebasMedicasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PruebasMedicasTable
     */
    public $PruebasMedicas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pruebas_medicas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PruebasMedicas') ? [] : ['className' => PruebasMedicasTable::class];
        $this->PruebasMedicas = TableRegistry::get('PruebasMedicas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PruebasMedicas);

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
