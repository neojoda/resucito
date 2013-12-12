<?php
App::uses('Song', 'Model');

/**
 * Song Test Case
 *
 */
class SongTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.song');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Song = ClassRegistry::init('Song');
	}
	
	
	public function testByLanguage() {
       
        $expected = array(
            array('Song' => array('id' => 1, 'title' => 'Lorem ipsum dolor sit amet')),
        );
        
        $actual = $this->Song->ByLanguage("es");

        $this->assertEquals($expected[0]['Song']['id'], $actual[0]['Song']['id']);
        $this->assertEquals($expected[0]['Song']['title'], $actual[0]['Song']['title']);
    }
	
	

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Song);

		parent::tearDown();
	}

}
