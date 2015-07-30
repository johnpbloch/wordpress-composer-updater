<?php

use JPB\WordPress\Updater\Application;

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

$app = new Application();

return $app;
