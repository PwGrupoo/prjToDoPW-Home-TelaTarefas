<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();

            // ✅ Vínculo com a tarefa
            $table->foreignId('tarefa_id')
                  ->constrained('tarefas')
                  ->onDelete('cascade');

            $table->string('nome'); // Ex: Pendente, Concluída, Em andamento...
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('statuses');
    }
};
