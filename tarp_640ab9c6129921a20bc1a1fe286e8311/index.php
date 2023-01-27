<?php
$GLOBALS['_ta_rp_key'] = '05496a43fad65fdec8776248055898e2';
$GLOBALS['_ta_reverse_proxy_id'] = '4lg26b';

require 'bootloader_640ab9c6129921a20bc1a1fe286e8311.php';

$options = array();
/*
$options = array(
	'replace' => array(
		'This is the text to find' => 'The new text',
		'This is the text to find 2' => 'The new text 2',
	)
);
*/

$tarp = new TARPLoader($options);

$tarp->excute();
?>