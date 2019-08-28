@extends('layouts.app')

@section('nav')
  @include('layouts.nav_top')

@endsection

@section('content')

<div class="text-center text-white">
    <hr>
    <div class="text-center mt-5">
        <img  width="300px" src="{{ asset('/images/thankyou.png')}}" alt="thank you">
    </div>
    <h1 style="font-family:Arial; ">Agradecemos o interesse!</h1>
    <br>
    <p style="font-family:Arial; font-size:19px;">Em breve você receberá um e-mail contento suas informações de credenciais que disponibilizará o serviço gratuitamente por um período experimental.<p>
    <br>
</div>

@endsection


@section('js')
<script>
    //Redireciona o usuário para a página de inserção novamente após cinco segundos
    setTimeout(function() {
        window.location.href = '/';
    }, 2500);
</script>
@endsection
