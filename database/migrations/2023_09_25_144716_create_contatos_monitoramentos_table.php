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
        Schema::create('contatos_monitoramentos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tipo_contato_id');
            $table->foreign('tipo_contato_id')->references('id')->on('tipos_contatos');

            $table->string('name',100)->nullable();
            $table->string('contato',100)->nullable();
            $table->string('descricao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contatos_monitoramentos');
    }
};
