<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProjectTableSeeder extends Seeder {

	public function run()
	{
		DB::table('projects')->delete();

		$projects = [

			[
				'client_id' => 1,
				'user_id' => 1,
				'title' => 'Tenant 1: example title',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et atque dicta possimus excepturi laborum quisquam fuga illum ad? Doloribus, nemo neque! Soluta, cupiditate, ipsam! Suscipit aperiam quibusdam error praesentium in.',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime(),
			],
			[
				'client_id' => 1,
				'user_id' => 1,
				'title' => 'Tenant 1: another example title',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et atque dicta possimus excepturi laborum quisquam fuga illum ad? Doloribus, nemo neque! Soluta, cupiditate, ipsam! Suscipit aperiam quibusdam error praesentium in.',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime(),
			],
			[
				'client_id' => 1,
				'user_id' => 3,
				'title' => 'Tenant 1: yet another example title',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et atque dicta possimus excepturi laborum quisquam fuga illum ad? Doloribus, nemo neque! Soluta, cupiditate, ipsam! Suscipit aperiam quibusdam error praesentium in.',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime(),
			],
			[
				'client_id' => 1,
				'user_id' => 4,
				'title' => 'Tenant 1: one more example title',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et atque dicta possimus excepturi laborum quisquam fuga illum ad? Doloribus, nemo neque! Soluta, cupiditate, ipsam! Suscipit aperiam quibusdam error praesentium in.',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime(),
			],
			[
				'client_id' => 1,
				'user_id' => 4,
				'title' => 'Tenant 1: and one more xxample title',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et atque dicta possimus excepturi laborum quisquam fuga illum ad? Doloribus, nemo neque! Soluta, cupiditate, ipsam! Suscipit aperiam quibusdam error praesentium in.',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime(),
			],
			[
				'client_id' => 2,
				'user_id' => 5,
				'title' => 'Tenant 2: random things',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et atque dicta possimus excepturi laborum quisquam fuga illum ad? Doloribus, nemo neque! Soluta, cupiditate, ipsam! Suscipit aperiam quibusdam error praesentium in.',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime(),
			],
			[
				'client_id' => 2,
				'user_id' => 5,
				'title' => 'Tenant 2: you are just too good to be true',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et atque dicta possimus excepturi laborum quisquam fuga illum ad? Doloribus, nemo neque! Soluta, cupiditate, ipsam! Suscipit aperiam quibusdam error praesentium in.',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime(),
			],
			[
				'client_id' => 2,
				'user_id' => 5,
				'title' => 'Tenant 2: oh no, one more project?',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et atque dicta possimus excepturi laborum quisquam fuga illum ad? Doloribus, nemo neque! Soluta, cupiditate, ipsam! Suscipit aperiam quibusdam error praesentium in.',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime(),
			],
			[
				'client_id' => 3,
				'user_id' => 7,
				'title' => 'Tenant 3: just one project',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et atque dicta possimus excepturi laborum quisquam fuga illum ad? Doloribus, nemo neque! Soluta, cupiditate, ipsam! Suscipit aperiam quibusdam error praesentium in.',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime(),
			],

		];

		DB::table('projects')->insert($projects);
	}

}