<?php
/* Applied rules: Ernest Allen Buffington (TheGhost) 04/22/2023 8:26 PM
 * StrStartsWithRector (https://wiki.php.net/rfc/add_str_starts_with_and_ends_with_functions)
 */
 
define('ELFINDER_PHP_ROOT_PATH', dirname(__FILE__));

function elFinderAutoloader($name) {
	$map = array(
		'elFinder' => ELFINDER_PHP_ROOT_PATH . '/elFinder.class.php',
		'elFinderConnector' => ELFINDER_PHP_ROOT_PATH . '/elFinderConnector.class.php',
		'elFinderEditor' => ELFINDER_PHP_ROOT_PATH . '/editors/editor.php',
		'elFinderLibGdBmp' => ELFINDER_PHP_ROOT_PATH . '/libs/GdBmp.php',
		'elFinderPlugin' => ELFINDER_PHP_ROOT_PATH . '/elFinderPlugin.php',
		'elFinderPluginAutoResize' => ELFINDER_PHP_ROOT_PATH . '/plugins/AutoResize/plugin.php',
		'elFinderPluginAutoRotate' => ELFINDER_PHP_ROOT_PATH . '/plugins/AutoRotate/plugin.php',
		'elFinderPluginNormalizer' => ELFINDER_PHP_ROOT_PATH . '/plugins/Normalizer/plugin.php',
		'elFinderPluginSanitizer' => ELFINDER_PHP_ROOT_PATH . '/plugins/Sanitizer/plugin.php',
		'elFinderPluginWatermark' => ELFINDER_PHP_ROOT_PATH . '/plugins/Watermark/plugin.php',
		'elFinderSession' => ELFINDER_PHP_ROOT_PATH . '/elFinderSession.php',
		'elFinderSessionInterface' => ELFINDER_PHP_ROOT_PATH . '/elFinderSessionInterface.php',
		'elFinderVolumeDriver' => ELFINDER_PHP_ROOT_PATH . '/elFinderVolumeDriver.class.php',
		'elFinderVolumeDropbox2' => ELFINDER_PHP_ROOT_PATH . '/elFinderVolumeDropbox2.class.php',
		'elFinderVolumeFTP' => ELFINDER_PHP_ROOT_PATH . '/elFinderVolumeFTP.class.php',
		'elFinderVolumeFlysystemGoogleDriveCache' => ELFINDER_PHP_ROOT_PATH . '/elFinderFlysystemGoogleDriveNetmount.php',
		'elFinderVolumeFlysystemGoogleDriveNetmount' => ELFINDER_PHP_ROOT_PATH . '/elFinderFlysystemGoogleDriveNetmount.php',
		'elFinderVolumeGoogleDrive' => ELFINDER_PHP_ROOT_PATH . '/elFinderVolumeGoogleDrive.class.php',
		'elFinderVolumeGroup' => ELFINDER_PHP_ROOT_PATH . '/elFinderVolumeGroup.class.php',
		'elFinderVolumeLocalFileSystem' => ELFINDER_PHP_ROOT_PATH . '/elFinderVolumeLocalFileSystem.class.php',
		'elFinderVolumeMySQL' => ELFINDER_PHP_ROOT_PATH . '/elFinderVolumeMySQL.class.php',
		'elFinderVolumeTrash' => ELFINDER_PHP_ROOT_PATH . '/elFinderVolumeTrash.class.php',
	);
	if (isset($map[$name])) {
		return include_once($map[$name]);
	}
	$prefix = substr($name, 0, 14);
	if (str_starts_with($prefix, 'elFinder')) {
		if ($prefix === 'elFinderVolume') {
			$file = ELFINDER_PHP_ROOT_PATH . '/' . $name . '.class.php';
			return (is_file($file) && include_once($file));
		} else if ($prefix === 'elFinderPlugin') {
			$file = ELFINDER_PHP_ROOT_PATH . '/plugins/' . substr($name, 14) . '/plugin.php';
			return (is_file($file) && include_once($file));
		} else if ($prefix === 'elFinderEditor') {
			$file = ELFINDER_PHP_ROOT_PATH . '/editors/' . substr($name, 14) . '/editor.php';
			return (is_file($file) && include_once($file));
		}
	}
	return false;
}

if (version_compare(PHP_VERSION, '5.3', '<')) {
	spl_autoload_register('elFinderAutoloader');
} else {
	spl_autoload_register('elFinderAutoloader', true, true);
}

