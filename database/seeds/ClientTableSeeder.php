<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ClientTableSeeder extends Seeder {

	public function run()
	{
		DB::table('clients')->delete();

		$clients = [
			[
				'name' => 'Acme Corporation',
				'subdomain' => 'acme',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime(),
			],
			[
				'name' => 'Forrest Gump',
				'subdomain' => 'gump',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime(),
			],
			[
				'name' => 'Attorneys at Law',
				'subdomain' => 'attorneys',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime(),
			],
		];

		DB::table('clients')->insert($clients);
	}

}