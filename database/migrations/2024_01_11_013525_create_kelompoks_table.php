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
        Schema::create('kelompok', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->integer('id_kelompok',true,false)->nullable(false);
            $table->integer('id_kelas', false)->nullable(false);
            $table->string('nama_kelompok', 60)->nullable(false);
            $table->text('foto_kelompok')->nullable(false);
            
            $table->foreign('id_kelas')
            ->references('id_kelas')->on('kelas')
            ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelompok');
    }
};
