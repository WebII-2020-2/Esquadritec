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
            background-color: #318A90;
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
            background-color: #318A90;
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
            width: 65%;
        }

        h2 {
            font-size: 30px;
            font-weight: 650;

        }
    </style>

</head>

<body>

    <div class="py-4 center">
        <h2 class="text-main font-monospace py-4">Editar Cliente {{$cliente->name}}</h2>

        <div class="card center-div text-white pr-5" style="min-width: 500px;height: 100%;">
            <form class="" style="height: 100%;" method="POST" action="{{route('edite_cliente_do',['id'=>$cliente->id])}}">
                @csrf
                <input type="hidden" value="{{$cliente->id}}" name="id">
                <div class="full-width pr-5 right mb-2">
                    <label for="name">Nome:</label>
                    <input class="input-3" type="text" value="{{$cliente->name}}" name="name" required>
                </div>

                <div class="full-width pr-5 right mb-2">
                    <label for="cpf">CPF:</label>
                    <input class="input-3" type="text" value="{{$cliente->cpf}}" name="cpf">
                </div>

                <div class="full-width pr-5 right mb-2">
                    <label for="cnpj">CNPJ:</label>
                    <input class="input-3" type="text" value="{{$cliente->cnpj}}" name="cnpj">
                </div>

                <div class="full-width mb-2 right pr-5">
                    <label for="email">Email:</label>
                    <input class="input-3" type="text" value="{{$cliente->email}}" name="email" required>
                </div>

                <div class="full-width mb-2 right pr-5">
                    <label for="tel">Telefone:</label>
                    <input class="input-3" type="text" value="{{$telefone->numero}}" name="telefone" required>
                </div>

                <h5 class="mt-3">Endereço</h5>

                <div class="full-width mb-2 right pr-5">
                    <label for="city">Cidade:</label>
                    <input class="input-3" id="city" type="text" value="{{$endereco->cidade}}" name="cidade" required>
                </div>

                <div class="full-width mb-2 right pr-5">
                    <label for="road">Rua:</label>
                    <input class="input-3" id="road" type="text" value="{{$endereco->rua}}" name="rua" required>
                </div>

                <div class="full-width mb-2 right pr-5">
                    <label for="district">Bairro:</label>
                    <input class="input-3" type="text" value="{{$endereco->bairro}}" name="bairro" required>
                </div>

                <div class="full-width mb-2 right pr-5">
                    <label for="number">Número:</label>
                    <input class="input-3" type="text" value="{{$endereco->numero}}" name="numero" required>
                </div>

                <div class="full-width mb-2 right pr-5">
                    <textarea id="observation" name="observacao" placeholder="Coloque observações aqui..."
                        style="height: 100px; width: 65%;">{{$endereco->observacao}}</textarea>
                </div>

                <div class="pt-4">
                    <a href="{{route('dashboard')}}" class="rounded-pill btn btn-sm btn-danger mr-5" type="reset">Cancelar</a>
                    <button class="rounded-pill btn btn-sm btn-success ml-5" type="submit">Confirmar</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
