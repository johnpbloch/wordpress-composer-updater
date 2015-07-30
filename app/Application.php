<?php

namespace JPB\WordPress\Updater;

use Symfony\Component\Console\Application as BaseApplication;

class Application extends BaseApplication {

	const VERSION = '0.1.0';

	public function __construct( $name = null, $version = null ) {
		parent::__construct( $name ?: 'WordPress Updater', $version ?: self::VERSION );
	}

}
