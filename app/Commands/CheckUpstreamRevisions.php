<?php

namespace JPB\WordPress\Updater\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CheckUpstreamRevisions extends Command {

	/**
	 * Configures the current command.
	 */
	protected function configure() {
		$this
			->setName( 'check' )
			->setDescription( 'Checks the upstream repository for updated revision numbers' )
			->addArgument( 'upstream', InputArgument::OPTIONAL, 'Which upstream repository to check' );
	}


	/**
	 * Executes the current command.
	 *
	 * This method is not abstract because you can use this class
	 * as a concrete class. In this case, instead of defining the
	 * execute() method, you set the code to execute by passing
	 * a Closure to the setCode() method.
	 *
	 * @param InputInterface  $input  An InputInterface instance
	 * @param OutputInterface $output An OutputInterface instance
	 *
	 * @return null|int null or 0 if everything went fine, or an error code
	 *
	 * @throws \LogicException When this abstract method is not implemented
	 *
	 * @see setCode()
	 */
	protected function execute( InputInterface $input, OutputInterface $output ) {
	}
}
