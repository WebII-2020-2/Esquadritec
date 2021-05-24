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

    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <h1 class="text-center login-title"></h1>
                    <div class="account-wall">
                        <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                            alt="">
                        <form class="form-signin">
                            @csrf
                        <input type="text" class="form-control" placeholder="Usuario" required autofocus>
                        <input type="password" class="form-control" placeholder="senha" required>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                            Entrar</button>
                        </form>
                    </div>
                </div>    
            </div>
        </div>
    </div>

    <script src="{{ asset('site/jquery.js') }}" async defer></script>
    <script src="{{ asset('site/bootstrap.js') }}" async defer></script>
</body>

</html>
