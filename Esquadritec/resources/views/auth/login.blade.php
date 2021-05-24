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
        top: 100px;
        text-align: center;
    }
    .full-width{
        width: 100%;
        height: 100%;
    }
    .input{
        position:relative;
        padding-top:10px;
        margin-top:10px;
    }
    .card{
        padding: 20px;
        width: 300px;
    }
</style>
<body>
    @if($errors->all())
    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach
    @endif

    <div class="container card center" style="">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <div class="p-3 center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                </div>
                <form class="g-5">
                    @csrf
                    <input type="text" class="input full-width" placeholder="Usuario" required autofocus>
                    <input type="password" class="input full-width" placeholder="senha" required>
                    <button class="btn btn-lg btn-primary btn-block input" type="submit">Entrar</button>
                </form>
            </div>
        </div>
    </div>


    <script src="{{ asset('site/jquery.js') }}" async defer></script>
    <script src="{{ asset('site/bootstrap.js') }}" async defer></script>
</body>

</html>
