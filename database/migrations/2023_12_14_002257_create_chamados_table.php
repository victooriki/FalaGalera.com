<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('chamados', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descricao');
            $table->string('email');
            $table->date('data_fechamento')->nullable();
            $table->date('data_conclusao')->nullable();
            $table->integer('avaliacao', false, true)->nullable();
            $table->text('feedback_avaliacao')->nullable();
            $table->enum('stats', [1, 2, 3, 4]);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chamados');
    }
};
