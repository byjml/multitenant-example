<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		$users = [
			[
				'client_id' => 1,
				'name' => 'John Doe',
				'email' => 'john.doe@example.com',
				'password' => bcrypt('password'),
				'created_at' => new DateTime(),
				'updated_at' => new DateTime(),
			],
			[
				'client_id' => 1,
				'name' => 'Sian Magan',
				'email' => 'sian@example.com',
				'password' => bcrypt('password'),
				'created_at' => new DateTime(),
				'updated_at' => new DateTime(),
			],
			[
				'client_id' => 1,
				'name' => 'Joe Bloggs',
				'email' => 'joe.bloggs@example.com',
				'password' => bcrypt('password'),
				'created_at' => new DateTime(),
				'updated_at' => new DateTime(),
			],
			[
				'client_id' => 1,
				'name' => 'Baby Doe',
				'email' => 'doe@example.com',
				'password' => bcrypt('password'),
				'created_at' => new DateTime(),
				'updated_at' => new DateTime(),
			],
			[
				'client_id' => 2,
				'name' => 'Rooble Kaahin',
				'email' => 'rob.kaahin@example.com',
				'password' => bcrypt('password'),
				'created_at' => new DateTime(),
				'updated_at' => new DateTime(),
			],
			[
				'client_id' => 3,
				'name' => 'Maryan Guuleed',
				'email' => 'maryan@example.com',
				'password' => bcrypt('password'),
				'created_at' => new DateTime(),
				'updated_at' => new DateTime(),
			],
			[
				'client_id' => 3,
				'name' => 'Gabriella Matarazzi',
				'email' => 'gaby@example.com',
				'password' => bcrypt('password'),
				'created_at' => new DateTime(),
				'updated_at' => new DateTime(),
			],

		];

		DB::table('users')->insert($users);
	}

}