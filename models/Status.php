<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'tarefa_id',  // ✅ adicionado
        'nome',
    ];

    // ✅ Um status pertence a uma tarefa
    public function tarefa()
    {
        return $this->belongsTo(Tarefa::class);
    }
}
