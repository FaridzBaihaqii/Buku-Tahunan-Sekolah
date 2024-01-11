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
        Schema::create('kelas', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->integer('id_kelas',true,false)->nullable(false);
            $table->integer('id_sekolah', false)->nullable(false);
            $table->string('nama_kelas', 60)->nullable(false);
            
            $table->foreign('id_sekolah')
            ->references('id_sekolah')->on('sekolah')
            ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
