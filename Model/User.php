<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'alphanumeric' => array(
				'rule' => array('alphanumeric'),
				'message' => 'Must be alphanumeric',
			),
			'maxlength' => array(
				'rule' => array('maxlength', 45),
				'message' => 'Must be under 45 characters',
			),
			'minlength' => array(
				'rule' => array('minlength', 3),
				'message' => 'Must be at least 3 characters',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Must not be empty',
			),
		),
		'email' => array(
			'isUnique' => array(
				'rule' => 'isUnique',
				'message' => 'This email address is already registered'),
			'email' => array(
				'rule' => 'email',
				'message' => 'Must be a valid email address'),
		),
		'locked' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
