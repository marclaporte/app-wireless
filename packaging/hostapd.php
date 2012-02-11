<?php

///////////////////////////////////////////////////////////////////////////////
// B O O T S T R A P
///////////////////////////////////////////////////////////////////////////////

$bootstrap = getenv('CLEAROS_BOOTSTRAP') ? getenv('CLEAROS_BOOTSTRAP') : '/usr/clearos/framework/shared';
require_once $bootstrap . '/bootstrap.php';

///////////////////////////////////////////////////////////////////////////////
// T R A N S L A T I O N S
///////////////////////////////////////////////////////////////////////////////

clearos_load_language('wireless');

///////////////////////////////////////////////////////////////////////////////
// C O N F I G L E T
///////////////////////////////////////////////////////////////////////////////

$configlet = array(
	'title' => lang('wireless_app_name'),
	'package' => 'hostapd',
	'process_name' => 'hostapd',
	'pid_file' => '/var/run/hostapd.pid',
	'reloadable' => FALSE,
	'url' => '/app/wireless'
);