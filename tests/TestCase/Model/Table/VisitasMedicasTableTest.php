<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VisitasMedicasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VisitasMedicasTable Test Case
 */
class VisitasMedicasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VisitasMedicasTable
     */
    public $VisitasMedicas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.visitas_medicas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('VisitasMedicas') ? [] : ['className' => VisitasMedicasTable::class];
        $this->VisitasMedicas = TableRegistry::get('VisitasMedicas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VisitasMedicas);

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
