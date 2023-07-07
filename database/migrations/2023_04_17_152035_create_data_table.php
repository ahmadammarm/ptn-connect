<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('asal');
            $table->string('jurusan');
            $table->float('nilai1', 4, 2);
            $table->float('nilai2', 4, 2);
            $table->float('nilai3', 4, 2);
            $table->float('nilai4', 4, 2);
            $table->float('nilai5', 4, 2);
            $table->float('nilai6', 4, 2);
            $table->float('nilai7', 4, 2);
            $table->float('nilai8', 4, 2);
            $table->float('nilai9', 4, 2);
            $table->float('nilai10', 4, 2);
            $table->json('bidang');
            $table->string('cita');
            $table->string('univ');
            $table->string('prodi1');
            $table->string('prodi2');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengguna');
    }
};
