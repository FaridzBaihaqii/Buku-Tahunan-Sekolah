<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('eskul', function (Blueprint $table) {
            $table->integer('id_eskul',true,false);
            $table->integer('kode_sekolah',false);
            $table->string('nama_eskul',200)->nullable(false);
            $table->string('deskripsi_eskul',200)->nullable(false);
            $table->text('foto_eskul')->nullable(false);

            $table->foreign('kode_sekolah')->references('kode_sekolah')->on('sekolah')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eskul');
    }
};
