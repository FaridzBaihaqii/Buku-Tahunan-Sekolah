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
        Schema::create('sekolah', function (Blueprint $table) {
            $table->integer('kode_sekolah',true,false);
            $table->text('nama_sekolah')->nullable(false);
            $table->text('foto_sekolah')->nullable(false);
            $table->string('misi',200)->nullable(false);
            $table->string('visi',200)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolah');
    }
};
