<?php
/**
 * CartRuleConditionFixture
 *
 * @author Florian Krämer
 * @copyright 2012 - 2013 Florian Krämer
 * @license MIT
 */
class CartRuleConditionFixture extends CakeTestFixture {

/**
 * Name
 *
 * @var string $name
 */
	public $name = 'CartRuleCondition';

/**
 * Table
 *
 * @var array $table
 */
	public $table = 'cart_rule_conditions';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
			'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary'),
			'cart_rule_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 36),
			'position' => array('type' => 'integer', 'null' => false, 'default' => '', 'length' => 2),
			'applies_to' => array('type' => 'string', 'null' => true, 'default' => null, 'comment' => 'cart, items'),
			'conditions' => array('type' => 'text', 'null' => true, 'default' => null),
			'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
			'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
			'indexes' => array(
				'PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		
	);

}
