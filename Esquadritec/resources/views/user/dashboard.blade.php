<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DASHBOARD</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('site/style.css')}}">
    </head>
    <body>
        <x-layout/>
        <label for="email" >EMAIL: </label>
        <h4 id="email">{{ $user->email }}</h4>

        <div class="container">
            <div class="row">          
                <div class="card">
                    <a href="{{route('user_create')}}">Novo usuário</a>
                </div>
                <div class="card">
                    <a href="{{route('new_material')}}">Novo material</a>
                </div>
                <div class="card">
                    <a href="{{route('new_cliente')}}">Novo Cliente</a>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <a href="{{route('listModelo')}}">Modelo</a>
                </div>
                <div class="card">
                    <a href="{{route('new_modelo')}}">Novo Modelo</a>
                </div>
                <div class="card">
                    <a href="{{route('logout')}}">Sair</a>
                </div>
            </div>
        </div>   

        @if(session()->has('errors'))
            <div style="text-align: center; display: flex;justify-content: center; width:100%; z-index:1;">
                <p id="alert" class="alert alert-warning" role="alert" style="width:200px;">{{session()->get('errors')}}</p>
            </div>
        @elseif(session()->has('succes'))
            <div style="text-align: center; display: flex;justify-content: center; width:100%; z-index:1;">
                <p id="alert" class="alert alert-success" role="alert" style="width:200px;">{{session()->get('succes')}}</p>
            </div>
        @endif

        <script src="{{ asset('site/jquery.js') }}" async defer></script>
        <script src="{{ asset('site/bootstrap.js') }}" async defer></script>
    </body>
</html>