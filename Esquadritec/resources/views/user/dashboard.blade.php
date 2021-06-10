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

        <ul style="display:block;">
            <li><a href="{{route('user_create')}}">Novo usuário</a></li>
            <li><a href="{{route('new_material')}}">Novo material</a></li>
            <li><a href="{{route('new_cliente')}}">Novo Cliente</a></li>

            <li><a href="{{route('logout')}}">Sair</a></li>
        </ul>

        @if(session()->has('succes'))
            <div class="alert alert-success">
                {{ session()->get('succes') }}
            </div>
        @endif
        <script src="{{ asset('site/jquery.js') }}"  async defer></script>
        <script src="{{ asset('site/bootstrap.js') }}" async defer></script>
        <!-- <script src="{{ asset('site/bootstrap.bundle.js.map') }}" async defer></script> -->
    </body>
</html>