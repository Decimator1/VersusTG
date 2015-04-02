<?php
App::uses('AppModel', 'Model');
/**
 * Card Model
 *
 */
class Card extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $name = 'Card';
	public $primaryKey = '_id';
	public $useDbConfig = 'cards';

	function schema($field = false) {
		$this->schema = array(
			'_id' => array('type' => 'string', 'primary' => true),
			'name' => array('type' => 'string'),
			'multiverseid' => array('type' => 'integer')
			);
	}
}
