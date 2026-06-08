<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    // Corrigido: tabela no plural, consistente com a migration
    protected $table = 'usuarios';

    protected $fillable = [
        'nome',
        'email',
        'password',
    ];

    // Relacionamento: um usuário tem várias tarefas
    public function tarefas()
    {
        return $this->hasMany(Tarefa::class, 'usuario_id');
    }
}
