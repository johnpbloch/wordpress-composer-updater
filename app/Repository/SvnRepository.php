<?php

namespace JPB\WordPress\Updater\Repository;

class SvnRepository implements RepositoryInterface {

	/**
	 * @var
	 */
	private $remote;

	/**
	 * @param string $remote
	 */
	public function __construct( $remote ) {
		$this->remote = $remote;
	}

}
