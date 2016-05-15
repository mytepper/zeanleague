<?php
App::uses('AppModel', 'Model');
/**
 * Team Model
 *
 * @property TeamType $TeamType
 * @property CompettionsType $CompettionsType
 */
class Team extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TeamType' => array(
			'className' => 'TeamType',
			'foreignKey' => 'team_type_id',
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'CompettionsType' => array(
			'className' => 'CompettionsType',
			'foreignKey' => 'team_id',
			'dependent' => false,
		)
	);

}
