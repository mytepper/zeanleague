<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Facebook $Facebook
 * @property Admin $Admin
 * @property Member $Member
 */
class User extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Facebook' => array(
			'className' => 'Facebook',
			'foreignKey' => 'facebook_id',
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Admin' => array(
			'className' => 'Admin',
			'foreignKey' => 'user_id',
			'dependent' => false,
		),
		'Member' => array(
			'className' => 'Member',
			'foreignKey' => 'user_id',
			'dependent' => false,
		)
	);

}
