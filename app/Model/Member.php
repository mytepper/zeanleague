<?php
App::uses('AppModel', 'Model');
/**
 * Member Model
 *
 * @property Line $Line
 * @property User $User
 */
class Member extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
		)
	);
}
