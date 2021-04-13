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

        <a href="{{route('logout')}}">LOGOUT</a>
        <a href="{{route('user_create')}}">NEW</a>

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