<!DOCTYPE html>
<html lang="pt-br">
    <head>
        @include('layouts.header')
        @yield('css')
    </head>
    <body>
        @yield('nav')

        <div class="container-fluid" id="app">
            @yield('content')
        </div>

        <div>
            &nbsp;
        </div>
        @yield('js')
    </body>
    @include('layouts.footer')

@if( session('status') )
    <?php  $dados = session('status');?>
    @if ( isset( $dados['success'] ) && is_string( $dados['log']['0'] ) )
        @if ( $dados['success'] == 'true' )
        <script>
            notificacao_sucesso("{{$dados['log']['0']}}");
        </script>
        @else
        <script>
            notificacao_erro("{{$dados['log']['0']}}");
        </script>
        @endif
    @endif    
@endif
</html>