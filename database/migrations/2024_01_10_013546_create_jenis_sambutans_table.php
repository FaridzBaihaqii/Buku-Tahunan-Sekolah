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
        Schema::create('jenis_sambutan', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->integer('id_jenis_sambutan',true,false)->nullable(false);
            $table->string('isi_sambutan', 60)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_sambutan');
    }
};
