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
        Schema::create('estados', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('regioes_id');
            $table->foreign('regioes_id')->references('id')->on('regioes')->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->string('name',50)->nullable();
            $table->string('sigla',5)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estados');
    }
};
