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
        <div class="py-4 center">
            <h2 class="text-black font-monospace py-4">Editar Funcionário</h2>

            <div class="card-generico center-div text-white" style="min-width: 700px;height: 100%;">
                <form class="" style="height: 100%; width: 100%;" method="POST" action="{{route('edite_funcionario_do')}}">
                    @csrf
                    <input type="hidden" value="{{$funcionario->id}}" name="id">
                    <div class="full-width mb-2 center">
                        <div style="margin-top: 3%; margin-bottom: 3%;">
                            <label for="user">Usuário:</label>
                            <input id="user" class="input-4" type="text" name="name" value="{{$funcionario->name}}" required>
                        </div>

                        <div>
                            <label for="email" class="space">Email:</label>
                            <input id="email" class="input-3" type="text" name="email" value="{{$funcionario->email}}">
                        </div>

                        <div class="mb-2" style="text-align: left;  margin-left: 16%;">
                            <label for="admin" style="margin-left: 55px;">Admin:</label>
                            @if ($funcionario->admin == 1)
                                <input id="admin" type="checkbox" name="admin" value="1" checked>
                            @else
                                <input id="admin" type="checkbox" name="admin" value="1">
                            @endif
                        </div>
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