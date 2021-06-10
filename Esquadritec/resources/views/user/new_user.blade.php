<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Novo Usuário</title>
        <meta name="description" content="Tela de novo usuário">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('site/style.css')}}">
    </head>
    <body>
        <form method="POST" action="{{ route('user_create_do') }}">
            @csrf
            <input type="text" name="name" placeholder="NOME">
            <input type="text" name="email" placeholder="EMAIL">
            <input type="password" name="password" placeholder="SENHA">
            <input type="password" name="password_2" placeholder="CONFIRMAR SENHA">
            <label for="admin">ADMIN</label>
            <input id="admin" type="checkbox" name="admin" value="1">
            <input type="submit" class="btn btn-orange" value="ENVIAR">
        </form>

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        @if($errors->all())
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        @endif

        <script src="{{ asset('site/jquery.js') }}" async defer></script>
        <script src="{{ asset('site/bootstrap.js') }}" async defer></script>
    </body>
</html>