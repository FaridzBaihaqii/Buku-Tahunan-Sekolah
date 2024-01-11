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
        Schema::create('wakil', function (Blueprint $table) {
            $table->integer('id_wakil',true,false);
            $table->integer('id_pemimpin',false);
            $table->string('nama_wakil',200)->nullable(false);
            $table->text('foto_wakil')->nullable(false);

            $table->foreign('id_pemimpin')->references('id_pemimpin')->on('pemimpin_sekolah')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wakil');
    }
};
