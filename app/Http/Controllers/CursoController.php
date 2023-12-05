<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function show($id)
    {
        $curso = Curso::find($id);

        if (!$curso) {
            return abort(404, 'Curso não encontrado');
        }

        return view('cursos.show', compact('curso'));
    }
}
