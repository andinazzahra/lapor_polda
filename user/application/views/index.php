<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 */
define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');

/*
 *---------------------------------------------------------------
 * SYSTEM FOLDER NAME
 *---------------------------------------------------------------
 */
$system_path = 'system';

/*
 *---------------------------------------------------------------
 * APPLICATION FOLDER NAME
 *---------------------------------------------------------------
 */
$application_folder = 'application';

/*
 *---------------------------------------------------------------
 * VIEW FOLDER NAME
 *---------------------------------------------------------------
 */
$view_folder = '';

/*
 *---------------------------------------------------------------
 * Resolve the system path for increased reliability
 *---------------------------------------------------------------
 */

$system_path = str_replace('\\', '/', $system_path);
if (realpath($system_path) !== FALSE) {
	$system_path = realpath($system_path).'/';
}
$system_path = rtrim($system_path, '/').'/';

if (!is_dir($system_path)) {
	exit("Your system folder path does not appear to be set correctly.");
}

define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));
define('BASEPATH', str_replace("\\", "/", $system_path));
define('FCPATH', str_replace(SELF, '', __FILE__));
define('SYSDIR', trim(strrchr(trim(BASEPATH, '/'), '/'), '/'));

if (is_dir($application_folder)) {
	define('APPPATH', $application_folder.'/');
} else {
	if (!is_dir(BASEPATH.$application_folder.'/')) {
		exit("Your application folder path does not appear to be set correctly.");
	}

	define('APPPATH', BASEPATH.$application_folder.'/');
}

if (!isset($view_folder[0]) && is_dir(APPPATH.'views/')) {
	define('VIEWPATH', APPPATH.'views/');
} elseif (is_dir($view_folder)) {
	define('VIEWPATH', $view_folder.'/');
} elseif (is_dir(APPPATH.$view_folder.'/')) {
	define('VIEWPATH', APPPATH.$view_folder.'/');
} else {
	exit("Your view folder path does not appear to be set correctly.");
}

// Load the CodeIgniter framework
require_once BASEPATH.'core/CodeIgniter.php';
