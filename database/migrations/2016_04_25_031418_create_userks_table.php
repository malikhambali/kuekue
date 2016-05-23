<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('userks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_pmsn');
			$table->string('telp');
			$table->string('jmlh_pesanan');
			$table->string('jenis_kue');
			$table->string('ukuran');
			$table->string('gambar');
			$table->string('ket');
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
		Schema::drop('userks');
	}

}
