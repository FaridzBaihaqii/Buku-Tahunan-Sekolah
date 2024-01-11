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
        Schema::create('seragam', function (Blueprint $table) {
            $table->integer('id_seragam',true,false);
            $table->integer('kode_sekolah',false);
            $table->integer('id_hari',false);
            $table->string('nama_seragam',200)->nullable(false);
            $table->text('foto_seragam')->nullable(false);

            $table->foreign('kode_sekolah')->references('kode_sekolah')->on('sekolah')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_hari')->references('id_hari')->on('hari')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seragams');
    }
};
