<?php
/**
 * OrderFixture
 *
 */
class OrderFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'order_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'order_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'ship_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'to_city' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'to_state' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'to_street' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'to_zip' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'order_id', 'unique' => 1)
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
			'order_id' => 1,
			'user_id' => 1,
			'order_date' => '2015-02-28 13:54:36',
			'ship_date' => '2015-02-28 13:54:36',
			'to_city' => 'Lorem ipsum dolor sit amet',
			'to_state' => '',
			'to_street' => 'Lorem ipsum dolor sit amet',
			'to_zip' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-02-28 13:54:36',
			'modified' => '2015-02-28 13:54:36'
		),
	);

}
