<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\CategoriaCurso;

class CursoController extends Controller
{
    public function index()
    {
        $dados = Curso::All();

        return view('curso.list')->with(['dados' => $dados]);
    }

    function create()
    {

        return view('curso.form');
    }


    function validateForm(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'requisito' => 'nullable|string',
            'carga_horaria' => 'nullable|string',
            'valor' => 'nullable|string',
        ], [
            'nome.required' => "O :attribute é obrigatorio",
            'requisito.string' => "O :attribute deve ser caracter",
            'carga_horaria.numeric' => "O :attribute deve ser numérico",
            'valor.numeric' => "O :attribute ser numérico",
        ]);
    }

    function store(Request $request)
    {
        //dd($request->all());
        $this->validateForm($request);

        Curso::create($request->all());

        return redirect('curso')->with("success", 'Registro Salvo com sucesso!');
    }

    function edit($id)
    {
        $data = Curso::find($id);


        return view('curso.form', [

        ]);
    }


    function update(Request $request, $id)
    {
        //dd($request->all());
        $this->validateForm($request);

        Curso::find($id)->update($request->all());

        return redirect('curso')->with("success", 'Registro Atualizado com sucesso!');
    }

    function destroy($id)
    {
        Curso::destroy($id);

        return redirect('curso')->with("success", 'Registro removido com sucesso!');
    }

    public function search(Request $request)
    {
        if (!empty($request->valor)) {
            $dados = Curso::where(
                $request->tipo,
                'like',
                "%$request->valor%"
            )->get();
        } else {
            $dados = Curso::All();
        }

        return view('curso.list', compact('dados'));
    }
}