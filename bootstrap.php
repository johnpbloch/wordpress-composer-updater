<?php

use JPB\WordPress\Updater\Application;
use JPB\WordPress\Updater\Commands\CheckUpstreamRevisions;

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

$app = new Application();
$app->add( new CheckUpstreamRevisions() );

return $app;
