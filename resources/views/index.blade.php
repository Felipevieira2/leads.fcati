@extends('layouts.app')

@section('nav')
@include('layouts.nav_top')
@endsection

@section('content')
<div class="text-white">

    <form action="/lead/novo" method="POST">
        {{ csrf_field() }}
        <div class="row">
            <div class="col input-group-lg">
                <label for="nome">Nome: </label>
                <input type="text" class="form-control" name="nome" aria-describedby="nome" placeholder="">
            </div>
            <div class="col input-group-lg">
                <label for="email">E-mail: *</label>
                <input type="text" class="form-control" name="email" aria-describedby="passHelp" placeholder=""
                    required>
            </div>
        </div>
        <div class="row">
            <div class="col input-group-lg">
                <label for="empresa">Empresa:</label>
                <input type="text" class="form-control" name="empresa" aria-describedby="empresa" placeholder="">
            </div>

            <div class="col input-group-lg">
                <label for="telefone">Telefone: </label>
                <input type="text" class="form-control telefone_internacional" name="telefone" id="telefone"
                    aria-describedby="telefone" placeholder="+55 11 32301613" value="+55">
            </div>
        </div>
            <div class="form-group">
                <label for="observacao">Observação: </label>
                <textarea name="observacao" class="form-control" name="observacao" cols="30" rows="5"></textarea>
            </div>
            <div class="form-group mb-4">
                <button type="submit" class="btn btn-lg btn-secondary pull-right">Enviar Dados</button>
            </div>
    </form>
    <br>
</div>

@endsection
