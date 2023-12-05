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
        Schema::create('tels', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('contato_monitoramento_id');
            $table->foreign('contato_monitoramento_id')->references('id')->on('contatos_monitoramentos');

            $table->string('numero',30)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tels');
    }
};
