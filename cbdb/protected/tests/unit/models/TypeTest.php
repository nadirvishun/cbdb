<?php

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-08-06 at 10:14:20.
 */
class TypeTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Type
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Type;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers Type::model
     * @todo   Implement testModel().
     */
    public function testModel() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Type::tableName
     * @todo   Implement testTableName().
     */
    public function testTableName() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Type::rules
     * @todo   Implement testRules().
     */
    public function testRules() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Type::relations
     * @todo   Implement testRelations().
     */
    public function testRelations() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Type::attributeLabels
     * @todo   Implement testAttributeLabels().
     */
    public function testAttributeLabels() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Type::search
     * @todo   Implement testSearch().
     */
    public function testSearch() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Type::getTypeOptions
     * @todo   Implement testGetTypeOptions().
     */
    public function testGetTypeOptions() {
        // Remove the following lines when you implement this test.
       $options=Type::model()->getTypeOptions();
       $this->assertTrue(is_array($options));
       $this->assertEquals(3,  count($options));
    }

}
