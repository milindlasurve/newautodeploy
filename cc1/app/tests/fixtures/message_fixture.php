<?php
/* Message Fixture generated on: 2010-05-18 12:05:18 : 1274165358 */
class MessageFixture extends CakeTestFixture {
	var $name = 'Message';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'content' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'char_count' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
		'author_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'category_id' => 1,
			'content' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'char_count' => 1,
			'author_id' => 1,
			'created' => '2010-05-18 12:19:18',
			'modified' => '2010-05-18 12:19:18'
		),
	);
}
?>