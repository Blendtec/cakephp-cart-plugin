<?php
class AddingNewFieldsAndFixingExistingFieldsForAddresses extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
			'create_field' => array(
				'order_addresses' => array(
					'state' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2),
				),
				'orders' => array(
					'shipping_address_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 36),
					'billing_address_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 36),
					'shipping_rate' => array('type' => 'string', 'null' => false, 'default' => 0.00),
					'gross' => array('type' => 'float', 'null' => false, 'default' => 0.00),
				)
			),
			'alter_field' => array(
				'order_addresses' => array(
					'type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16),
				)
			),
		),
		'down' => array(
			'drop_field' => array(
				'orders' => array(
					'billing_address_id',
					'billing_address_id',
					'shipping_rate',
					'gross',
				),
				'order_addresses' => array(
					'state',
				)
			),
			'alter_field' => array(
				'order_addresses' => array(
					'type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2),
				)
			)
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		return true;
	}
}
