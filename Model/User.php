<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Listing $Listing
 * @property Charity $Charity
 */
class User extends AppModel {

	public $displayField = 'name';

        
        public function beforeSave($options = array()) {

            if (isset($this->data['User']['password'])) {
            $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        }
        return true;
    }
        
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
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
		'password' => array(
			'minlength' => array(
				'rule' => array('minlength', 4),
				'message' => 'Password must be at least 4 characters long',
			'alphanumeric' => array(
				'rule' => array('alphanumeric'),
				'message' => 'Must be alphanumeric',
			),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Listing' => array(
			'className' => 'Listing',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
        
 public $hasAndBelongsToMany = array(
        'Charity' =>
            array(
                'className'              => 'Charity',
                'joinTable'              => 'charities_users',
                'foreignKey'             => 'user_id',
                'associationForeignKey'  => 'charity_id',
                'unique'                 => true,
                'conditions'             => '',
                'fields'                 => '',
                'order'                  => '',
                'limit'                  => '',
                'offset'                 => '',
                'finderQuery'            => '',
                'deleteQuery'            => '',
                'insertQuery'            => ''
            )
    );

}