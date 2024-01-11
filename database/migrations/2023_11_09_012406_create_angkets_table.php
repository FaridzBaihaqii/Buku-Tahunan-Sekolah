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
        Schema::create('angket', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->integer('id_angket',true,false)->nullable(false);
            $table->integer('id_kelas', false)->nullable(false);
            $table->string('nama_angket', 60)->nullable(false);
            $table->text('foto_angket')->nullable(false);
            
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
        Schema::dropIfExists('angket');
    }
};
