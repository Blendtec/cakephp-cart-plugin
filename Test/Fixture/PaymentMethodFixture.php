<?php
/* PaymentMethodFixture
 *
 * @author Florian Krämer
 * @copyright 2012 - 2013 Florian Krämer
 * @license MIT
 */
class PaymentMethodFixture extends CakeTestFixture {
/**
 * Name
 *
 * @var string
 * @access public
 */
	public $name = 'PaymentMethod';

/**
 * Fields
 *
 * @var array
 * @access public
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null),
		'alias' => array('type' => 'string', 'null' => true, 'default' => null),
		'class' => array('type' => 'string', 'null' => true, 'default' => null),
		'fee' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 6,2, 'comment' => 'Can be used to charge a fee for that processor'),
		'active' => array('type' => 'boolean', 'null' => true, 'default' => '0', 'comment' => 'Virtual as a download or a service'),
		'description' => array('type' => 'string', 'null' => true, 'default' => null),
		'position' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

/**
 * Records
 *
 * @var array
 * @access public
 */
	public $records = array(
	);

}
