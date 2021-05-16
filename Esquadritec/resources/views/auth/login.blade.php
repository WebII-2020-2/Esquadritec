<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOGIN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('site/style.css')}}">
</head>

<body>
    @if($errors->all())
    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach
    @endif
    <form action="{{route('login/do')}}" method="POST">
        @csrf
        <input type="text" name="email" placeholder="E-mail" required>
        <input type="password" name="password" placeholder="Senha" required>
        <button type="submit" class="btn btn-success">ENTRAR</button>
    </form>

    {{-- <h1>Teste</h1> --}}
    <script src="{{ asset('site/jquery.js') }}" async defer></script>
    <script src="{{ asset('site/bootstrap.js') }}" async defer></script>
</body>

</html>