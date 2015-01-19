<?php namespace Shoulderscms\Shoulderscms;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use \User;
use \Hash;

class UserCreatorCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'create-user';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Add a user to the users table';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$username = $this->ask('Enter a username:');
		$password = $this->secret('Enter a password:');
		$first_name = $this->ask('Enter users first name:');
		$last_name = $this->ask('Enter users last name:');
		$email = $this->ask('Enter users email:');

		$user = new User;
		$user->username = $username;
		$user->password = Hash::make($password);
		$user->first_name = $first_name;
		$user->last_name = $last_name;
		$user->email = $email;
		$user->save();

		$this->info('User was created');
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			// array('username', InputArgument::REQUIRED, 'Desired username.'),
			// array('password', InputArgument::REQUIRED, 'Desired password.'),
		);
	}

}
