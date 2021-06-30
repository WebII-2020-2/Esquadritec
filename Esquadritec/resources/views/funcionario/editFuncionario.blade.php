<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Novo Usuário</title>
        <meta name="description" content="Tela de novo usuário">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('site/style.css')}}">

        <style>
            .card {
                background-color: #295C8A;
                border-radius: 28px;
                height: 255px;
            }

            .center {
                text-align: center;
            }

            .center-div {
                margin: auto;
                width: 50%;
                padding: 10px;
            }

            .form-control {
                width: 65%;
            }

            .bottom-div {
                position: absolute;
                bottom: 20%;
                left: 25%;
            }

            #body {
                color: blue;
            }

            .full-width {
                width: 100%;
            }

            .input {
                position: relative;
                padding-top: 10px;
                margin-top: 10px;
            }

            .card {
                padding: 20px;
                background-color: #295C8A;
                border-radius: 28px;
            }

            .btn {
                height: 30px;
                text-align: center;
            }

            .right {
                text-align: right;
            }

            .input-3 {
                width: 30%;
                border-radius: 10px;
                border: solid 1px white;
            }

            .space {
                margin-left: 89px;
            }

            h2 {
                font-size: 30px;
                font-weight: 650;

            }

        </style>

    </head>

    <body>
        <x-layout/>
        <div class="py-4 center">
            <h2 class="text-black font-monospace py-4">Editar Funcionário</h2>

            @if(session()->has('errors'))
                <div style="text-align: center; display: flex;justify-content: center; width:100%; z-index:9999;">
                    <p id="alert" class="alert alert-warning" role="alert" style="width:200px;">{{session()->get('errors')}}</p>
                </div>
            @elseif(session()->has('succes'))
                <div style="text-align: center; display: flex;justify-content: center; width:100%; z-index:9999;">
                    <p id="alert" class="alert alert-success" role="alert" style="width:200px;">{{session()->get('succes')}}</p>
                </div>
            @endif

            <div class="card center-div text-white" style="min-width: 700px;height: 100%;">
                <form class="" style="height: 100%; width: 100%;" method="POST" action="{{route('edite_funcionario_do')}}">
                    @csrf
                    <input type="hidden" value="{{$funcionario->id}}" name="id">
                    <div class="full-width mb-2 center">
                        <label for="user">Usuário:</label>
                        <input id="user" class="input-3" type="text" name="name" value="{{$funcionario->name}}" required>

                        <label for="email" class="space">Email:</label>
                        <input id="email" class="input-3" type="text" name="email" value="{{$funcionario->email}}">

                    </div>

                    <div class="mb-2" style="text-align: left;">
                        <label for="admin" style="margin-left: 55px;">Admin:</label>
                        @if ($funcionario->admin == 1)
                            <input id="admin" type="checkbox" name="admin" value="1" checked>
                        @else
                            <input id="admin" type="checkbox" name="admin" value="1">
                        @endif
                    </div>

                    <div class="pt-4">
                        <a href="{{route('dashboard')}}" class="rounded-pill btn btn-sm btn-danger mr-5" type="reset">Cancelar</a>
                        <button class="rounded-pill btn btn-sm btn-success ml-5" type="submit">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>
        
        <x-footer/>
    </body>
</html>