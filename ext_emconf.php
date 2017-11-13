<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "ttaddress_rtefield".
 *
 * Auto generated 06-03-2013 23:27
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Adding an RTE-enabled field to tt_address records',
	'description' => '',
	'category' => 'be',
	'author' => 'Heiko Hänsge',
	'author_email' => 'mail@wild-wild-web.de',
	'shy' => '',
	'dependencies' => 'tt_address',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => 'uploads/tx_ttaddressrtefield/rte/',
	'modify_tables' => 'tt_address',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '7.6.0',
	'constraints' => array(
		'depends' => array(
			'tt_address' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
    'autoload' => array(
        'classmap' => array('Classes')
    )
);

?>