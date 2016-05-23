<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pesans', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('pmsn');
			$table->string('alamat');
			$table->string('no_tlp');
			$table->string('jmlh');
			$table->string('ciri_kue');
			$table->string('img');
			$table->string('ket');
			$table->enum('status',['disetujui','ditunda','tidak disetujui']);
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
		Schema::drop('pesans');
	}

}
