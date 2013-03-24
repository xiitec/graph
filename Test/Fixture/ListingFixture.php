<?php
/**
 * ListingFixture
 *
 */
class ListingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'service_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'rate' => array('type' => 'integer', 'null' => true, 'default' => null),
		'website' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description' => array('type' => 'binary', 'null' => true, 'default' => null),
		'pitcher_or_catcher' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 7, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'active' => array('type' => 'binary', 'null' => false, 'default' => '1', 'length' => 1),
		'date_created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'summary' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'service_id' => 1,
			'rate' => 1,
			'website' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'pitcher_or_catcher' => 'Lorem',
			'user_id' => 1,
			'active' => 'Lorem ipsum dolor sit ame',
			'date_created' => '2013-03-24 03:35:31',
			'summary' => 'Lorem ipsum dolor sit amet'
		),
	);

}
