<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    public function estaInscrito()
    {
        // Obtém o usuário autenticado (se existir)
        $user = auth()->user();

        // Verifica se o usuário está inscrito no curso
        return $user && $this->inscricoes()->where('user_id', $user->id)->exists();
    }

    public function inscricoes()
    {
        return $this->hasMany(Inscricao::class, 'curso_id');
    }
}
