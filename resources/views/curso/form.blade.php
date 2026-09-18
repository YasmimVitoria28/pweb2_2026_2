@extends('main')
@section('titulo','Formulário de Cursos')
@section ('conteudo')
<div class="row">
    @php
    if(!empty($dado->id)){
        $action =route('curso.uptade', $dado->id);
    }else{
        $action =route('curso.store');
    }
    @endphp
    <h4>Formulário Curso</h4>
    <form action="{{route('curso.store')}}" method="post">
        @csrf
        <h3>Formulário Usuário</h3>
        <input type="hidden" name="id" value="{{old('id', $data->id ?? '')}}">
        <div class="col-6">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" 
            value="{{old('nome', $data->nome ?? '')}}">
        </div>
        <div class="col-6">
            <label for="requisito">Requisito</label>
            <input type="text" name="requisito" class="form-control" 
            value="{{old('requisito', $data->requisito ?? '')}}">
        </div>
        <div class="col-6">
            <label for="carga_horaria">Carga Horária</label>
            <input type="text" name="carga_horaria" class="form-control" 
            value="{{old('carga_horaria' , $data->carga_horaria ?? '')}}">
        </div>

        <div class="col-6">
                <label for="valor">Valor</label>
                <input type="text" name="valor" class="form-control" 
                value="{{old('valor' , $data->valor ?? '')}}">
            </div>

        <div class="mt-2">
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="./UsuarioList.php" class="btn btn-primary"> Voltar</a>
        </div>


    </form>

</div>
@stop