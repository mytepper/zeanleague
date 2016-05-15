<?php
App::uses('AppModel', 'Model');
/**
 * TeamType Model
 *
 * @property Team $Team
 */
class TeamType extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Team' => array(
			'className' => 'Team',
			'foreignKey' => 'team_type_id',
			'dependent' => false,
		)
	);

}
