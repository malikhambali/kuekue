<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIkuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ikues', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_kue');
			$table->string('harga');	
			$table->string('img');
			$table->string('ket');
			$table->enum('status',['tidak tersedia','tersedia','proses']);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ikues');
	}

}
