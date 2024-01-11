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
        Schema::create('siswa', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->integer('id_siswa',true,false)->nullable(false);
            $table->integer('id_kelas',false)->nullable(false);
            $table->string('nama_siswa', 60)->nullable(false);
            $table->text('sosmed_siswa')->nullable(false);
            $table->text('foto_siswa')->nullable(false);
            $table->string('quotes_siswa')->nullable(false);

            $table->foreign('id_kelas')->on('kelas')
            ->references('id_kelas')
            ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
