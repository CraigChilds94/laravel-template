<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// Call the user seeder
		$this->call('UserTableSeeder');
	}

}

/**
 * User seeding
 */
class UserTableSeeder extends Seeder {

    public function run()
    {
		// delete existing users
        DB::table('users')->delete();

		// create a new user
        User::create([
			'username' 	=> 'admin',
			'password' 	=> Hash::make('admin123'),
			'email' 	=> 'foo@bar.com'
		]);
    }

}
