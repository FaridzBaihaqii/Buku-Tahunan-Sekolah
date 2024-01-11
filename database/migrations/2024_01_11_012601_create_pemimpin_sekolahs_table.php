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
        Schema::create('pemimpin_sekolah', function (Blueprint $table) {
            $table->integer('id_pemimpin',true,false);
            $table->integer('kode_sekolah',false);
            $table->string('nama_pemimpin',200)->nullable(false);
            $table->text('foto_pemimpin')->nullable(false);
            $table->string('quotes_pemimpin',200)->nullable(false);

            $table->foreign('kode_sekolah')->references('kode_sekolah')->on('sekolah')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemimpin_sekolah');
    }
};
