<?php
	if(!file_exists('config.php'))
		copy('config.php.example', 'config.php');

	require 'config.php';

	if(!$cache_enabled) {
		include 'include/main.php';
		exit();
	}
	
	if(file_exists($cache_file) && time() - $cache_expiry_time < filemtime($cache_file)) {
		include $cache_file;
		exit();
	}

	ob_start();
	include 'include/main.php';

	$handle = fopen($cache_file, 'w');
	fwrite($handle, ob_get_contents());
	fclose($handle);
	ob_end_flush();
?>