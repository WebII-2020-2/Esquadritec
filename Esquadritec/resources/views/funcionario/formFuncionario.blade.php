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
        <x-layout/>

        @if(session()->has('errors'))
            <div style="text-align: center; display: flex;justify-content: center; width:100%; z-index:9999;">
                <p id="alert" class="alert alert-warning" role="alert" style="width:200px;">{{session()->get('error')}}</p>
            </div>
        @elseif(session()->has('succes'))
            <div style="text-align: center; display: flex;justify-content: center; width:100%; z-index:9999;">
                <p id="alert" class="alert alert-success" role="alert" style="width:200px;">{{session()->get('succes')}}</p>
            </div>
        @endif

        <div class="py-4 center">
           <h2 class="text-dark font-monospace py-4">Novo Funcionário</h2>
            <div class="card center-div text-white" style="min-width: 700px;height: 100%;">
                <div class="right" style="margin-right: 20%;">
                    <form class="" style="height: 100%; width: 100%;" method="POST" action="{{route('new_funcionario_do')}}">
                        @csrf
                        <div class="right" style="margin-top: 3%; margin-bottom: 1%;">
                            <label for="user">Usuário:</label>
                            <input id="user" style="width: 60%;"  class="input-3" type="text" name="name" required>
                        </div>
                        <div class="right" style="margin-bottom: 1%;">
                            <label for="email" class="space">Email:</label>
                            <input id="email" style="width: 60%;"  class="input-3" type="text" name="email" required>
                        </div>
                        <div class="right" style="margin-bottom: 1%;">
                            <label for="password" style="margin-left: 12px;">Senha:</label>
                            <input id="password" style="width: 60%;"  class="input-3" type="password" name="password" required>
                        </div>
                        <div class="right" style="margin-bottom: 1%;">
                            <label for="confir_password" style="margin-left: 10px;">Confirmar Senha:</label>
                            <input id="confir_password" style="width: 60%;"  class="input-3" type="password" name="password_2" required>
                        </div>
                        <div style="margin-right: 58.5%;">
                            <label for="admin" style="margin-left: 55px;">Admin:</label>
                            <input id="admin" type="checkbox" name="admin" value="1">
                        </div>
                        <div class="right" style="margin-right: 8%; margin-bottom: 3%; margin-top: 3%;">
                            <a href="{{route('dashboard')}}" class="rounded-pill btn btn-sm btn-danger mr-5" type="reset">Cancelar</a>
                            <button class="rounded-pill btn btn-sm btn-success ml-5" type="submit">Confirmar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <x-footer/>
    </body>
</html>