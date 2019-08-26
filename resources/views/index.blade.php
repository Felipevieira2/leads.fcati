@extends('layouts.app')

@section('nav')
  @include('layouts.nav_top')
@endsection

@section('content')
<div class="col-md-6 offset-md-3 text-white">
     <hr>
    <form action="/lead/novo" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" class="form-control" name="nome" aria-describedby="nome" placeholder="">
        </div>
        <div class="form-group">
            <label for="empresa">Empresa:</label>
            <input type="text" class="form-control" name="empresa" aria-describedby="empresa" placeholder="">
        </div>
        <div class="form-group">
            <label for="email">E-mail: *</label>
            <input type="text" class="form-control" name="email" aria-describedby="passHelp" placeholder="" required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone: </label>
            <input type="text" class="form-control celular_ddd" name="telefone" id="telefone"  aria-describedby="telefone" placeholder="">  
        </div>
        <div class="form-group">
            <label for="observacao">Observação: </label>
            <textarea name="observacao" class="form-control" name="observacao" cols="30" rows="7"></textarea>
        </div>
        <div class="form-group mb-4">
            <button type="submit" class="btn btn-success pull-right">Enviar</button>
        </div>
    </form>
    <br>
</div>

@endsection


@section('js')
<script>

// Redireciona o usuário para a página da DevMedia após cinco segundos
document.getElementById('telefone').addEventListener('blur', function()
{   
    if( this.value.length == 14 )
    {
        this.classList.add('telefone_ddd');
        this.classList.remove('celular_ddd');
        
    }
    if( this.value.length < 14 && this.value != '' )
    {   
        this.classList.add('is-invalid');
        notificacao_erro('Número digitado inválido!');
    }
    if( this.value.length >= 14 )
    {   
        this.classList.remove('is-invalid');    
    }
});

document.getElementById('telefone').addEventListener('focus', function()
{   
    this.classList.remove('telefone_ddd');
    this.classList.add('celular_ddd');
});



</script>

@endsection