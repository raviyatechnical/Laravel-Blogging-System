<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

		$this->call('CategoryTableSeeder');
		$this->command->info('Category table seeded!');

		$this->call('PostTableSeeder');
		$this->command->info('Post table seeded!');
	}
}