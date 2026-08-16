<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index()
    {
        $dados = Aluno::all();
        return view('aluno.list', compact('dados'));
    }
}
function store(Request $request) // post pega dados submetidos, get pega da url, esse pega e nao sabe
{
   // dd($request->all());

    Aluno:: create($request->all());

    return redirect ('aluno')->with('sucess','Registro salvo com sucesso');
}
