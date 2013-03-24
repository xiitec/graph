<?php
App::uses('AppModel', 'Model');
/**
 * Charity Model
 *
 * @property User $User
 */
class Charity extends AppModel {

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
		'website' => array(
			'url' => array(
				'rule' => array('url'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

public $hasAndBelongsToMany = array(
        'User' =>
            array(
                'className'              => 'User',
                'joinTable'              => 'charities_users',
                'foreignKey'             => 'charity_id',
                'associationForeignKey'  => 'user_id',
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
