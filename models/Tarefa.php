<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id',
        'titulo',
        'descricao',
    ];

    // ✅ Uma tarefa tem um status
    public function status()
    {
        return $this->hasOne(Status::class);
    }

    // Uma tarefa pertence a um usuário
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
