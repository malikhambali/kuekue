<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_lengkap');
			$table->string('no_telepon');
			$table->string('username')->unique();
			$table->string('password', 60);
			$table->rememberToken();
			$table->timestamps();
		});

		DB::table('users')->insert(
			array(
				'nama_lengkap' => 'Admin' ,
				'username' => 'admin',
				'password' => \Hash::make('admin')
			)
		);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
