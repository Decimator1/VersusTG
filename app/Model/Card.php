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
			'manaCost' => array('type' => 'string'),
			'cmc' => array('type' => 'integer'),
			'type' => array('type' => 'string'),
			'rarity' => array('type' => 'string'),
			'text' => array('type' => 'string'),
			'artist' => array('type' => 'string'),
			'number' => array('type' => 'string'),
			'power' => array('type' => 'string'),
			'toughness' => array('type' => 'string'),
			'layout' => array('type' => 'string'),
			'sets' => array('type' => 'string'),
			'subtypes' => array('type' => 'string'),
			'types' => array('type' => 'string'),
			'supertypes' => array('type' => 'string'),
			'color' => array('type' => 'string'),
			'multiverseid' => array('type' => 'integer')
			);
	}
}
