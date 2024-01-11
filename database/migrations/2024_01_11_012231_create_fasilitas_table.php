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
        Schema::create('fasilitas', function (Blueprint $table) {
            $table->integer('id_fasilitas',true,false);
            $table->integer('kode_sekolah',false);
            $table->string('nama_fasilitas',200)->nullable(false);
            $table->text('foto_fasilitas')->nullable(false);

            $table->foreign('kode_sekolah')->references('kode_sekolah')->on('sekolah')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fasilitas');
    }
};
