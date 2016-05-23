<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('kues')->insert([
			'kue_nama' => 'Kue Hajatan', 
			]);


		// $this->call('UserTableSeeder');
	}



}
