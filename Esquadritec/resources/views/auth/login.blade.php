<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOGIN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <x-content/>
</head>
<style>
    .center {
        top: 100px;
    }
    body {
        background-color: rgba(0, 97, 116, 0);
    }
    html {
        height: 100%;
        margin: 0%;
        background-image:linear-gradient(rgba(0, 97, 116, 0.4), rgba(0, 97, 116, 0.4)),
        url("{{asset('img/index_back.png')}}");
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
<body>
    <x-AuthLayout/>
    <div class="container card center bg-white-opacity" style="width: 400px; height:350px;">
        <div class="row justify-content-md-center">
            <div class="col-md-auto px-5">
                <div class="p-3 center" style="color: white;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                </div>
                <form class="g-5" action="{{ route('loginDo') }}" method="POST">
                    @csrf
                    <input type="text" name="email" class="input full-width form-control" placeholder="Usuário" style="width: 300px"
                        required autofocus>
                    <input type="password" name="password" class="input full-width form-control" placeholder="Senha"
                        style="width: 300px" required>
                    <button class="center-div rounded-pill btn btn-sm btn-green mt-4" style="padding-bottom: 10%;"
                        type="submit">Entrar</button>
                </form>
            </div>
        </div>
    </div>

    <x-footer/>

    <script src="{{ asset('site/jquery.js') }}" async defer></script>
    <script src="{{ asset('site/bootstrap.js') }}" async defer></script>
</body>

</html>
