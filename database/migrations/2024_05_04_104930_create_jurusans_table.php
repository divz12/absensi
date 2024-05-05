<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::create('jurusan', function (Blueprint $table) {
			$table->id();
			$table->string('nama');
			$table->timestamps();
		});

		Schema::table('siswa', function (Blueprint $table) {
			$table->dropColumn('jurusan_siswa');
			$table->foreignId('id_jurusan')->references('id')->on('jurusan');
		});
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jurusan');
    }
};
