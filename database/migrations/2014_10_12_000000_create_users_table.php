<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_orang_tua');
            $table->string('nama_mahasiswa');
            $table->string('no_hp')->nullable();
            $table->string('username')->unique();
            $table->string('password');
            $table->enum('status', ['true', 'false']);
            $table->string('nm_fakultas')->nullable();
            $table->string('id_fakultas')->nullable();
            $table->string('id_prodi')->nullable();
            $table->string('nm_prodi')->nullable();
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
        Schema::dropIfExists('users');
    }
}
