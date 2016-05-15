<?php
App::uses('CompettionsType', 'Model');

/**
 * CompettionsType Test Case
 */
class CompettionsTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.compettions_type',
		'app.team',
		'app.team_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CompettionsType = ClassRegistry::init('CompettionsType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CompettionsType);

		parent::tearDown();
	}

}
