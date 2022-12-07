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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_aiswa',50);
            $table->string('alamat_siswa', 60);
            $table->string('email_siswa', 60)->unique();
            $table->text('password_siswa');
            $table->string('jenis_kelamin_siswa', 10);
            $table->date('tanggal_lahir_siswa');
            $table->integer('nisn_siswa')->unique();
            $table->foreignId('sekolah_id');
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
        Schema::dropIfExists('siswa');
    }
};
