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
        Schema::create('estados_contatos_monitoramentos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBiginteger('estado_id');
            $table->unsignedBiginteger('contato_monitoramento_id');

            $table->foreign('estado_id')->references('id')
                ->on('estados')->onDelete('cascade');

            $table->foreign('contato_monitoramento_id')->references('id')
                ->on('contatos_monitoramentos')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estados_contatos_monitoramentos');
    }
};
