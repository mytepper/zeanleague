<?php
App::uses('AppModel', 'Model');
/**
 * CompettionsType Model
 *
 * @property Team $Team
 */
class CompettionsType extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Team' => array(
			'className' => 'Team',
			'foreignKey' => 'team_id',
		)
	);
}
