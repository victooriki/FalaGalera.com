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
            $table->integer('contato', false, true);
            $table->date('data_fechamento');
            $table->date('data_conclusao');
            $table->integer('avaliacao', false, true);
            $table->text('feedback_avaliacao');
            $table->enum('stats', [1, 2, 3, 4]);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chamados');
    }
};
