<?php

namespace JPB\WordPress\Updater\Repository;

class GitRepository implements RepositoryInterface {

	private $remote;

	/**
	 * @param string $remote
	 */
	public function __construct( $remote ) {
		$this->remote = $remote;
	}

}
