<?php

namespace JPB\WordPress\Updater\Repository;

use InvalidArgumentException;
use LogicException;

class Factory {

	/**
	 * @throws InvalidArgumentException
	 *
	 * @param string $remote
	 *
	 * @return RepositoryInterface
	 */
	function create( $remote ) {
		$map = $this->getValidRepositoryLocations();
		if ( empty( $map[ $remote ] ) ) {
			throw new InvalidArgumentException( "$remote is not a valid repository location!" );
		}
		switch ( $map[ $remote ] ) {
			case 'git':
				return new GitRepository( $remote );
			case 'svn':
				return new SvnRepository( $remote );
		}
		throw new LogicException( 'facepalm' );
	}

	/**
	 * @return array
	 */
	private function getValidRepositoryLocations() {
		$map = [
			'https://core.svn.wordpress.org/'    => 'svn',
			'http://core.svn.wordpress.org/'     => 'svn',
			'https://develop.svn.wordpress.org/' => 'svn',
			'http://develop.svn.wordpress.org/'  => 'svn',
			'https://core.svn.wordpress.org'     => 'svn',
			'http://core.svn.wordpress.org'      => 'svn',
			'https://develop.svn.wordpress.org'  => 'svn',
			'http://develop.svn.wordpress.org'   => 'svn',
			'https://core.git.wordpress.org/'    => 'git',
			'http://core.git.wordpress.org/'     => 'git',
			'https://develop.git.wordpress.org/' => 'git',
			'http://develop.git.wordpress.org/'  => 'git',
			'https://core.git.wordpress.org'     => 'git',
			'http://core.git.wordpress.org'      => 'git',
			'https://develop.git.wordpress.org'  => 'git',
			'http://develop.git.wordpress.org'   => 'git',
		];

		return $map;
	}

}
