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
<style>
    .center{
        text-align: center;
    }
    .center-card{
        position: absolute;
        text-align: center;
    }
    .full-width{
        width: 100%;
    }
</style>
<body>
    @if($errors->all())
    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach
    @endif

    <div class="center-card">
        <div  class="card p-2 center gy-5" style="width: 400px;">
            <h3 class="text-center text-white pt-5">Login form</h3>
            <div class="p-3 center">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                alt="">
            </div>
            <form class="form-signin full-width">
                @csrf
            <input type="text" class="form-control" placeholder="Usuario" required autofocus>
            <input type="password" class="form-control" placeholder="senha" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">
                Entrar</button>
            </form>
        </div>    
    </div>


    <script src="{{ asset('site/jquery.js') }}" async defer></script>
    <script src="{{ asset('site/bootstrap.js') }}" async defer></script>
</body>

</html>
