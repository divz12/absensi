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
		Schema::create('kelas', function (Blueprint $table) {
			$table->id();
			$table->string('nama');
			$table->timestamps();
		});

		Schema::table('siswa', function (Blueprint $table) {
			$table->dropColumn('kelas_siswa');
			$table->foreignId('id_kelas')->references('id')->on('kelas');
		});
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas');
    }
};
