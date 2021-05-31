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
        <h2 class="text-main font-monospace py-4">NOVO CLIENTE</h2>

        <div class="card center-div text-white pr-5" style="min-width: 500px;height: 100%;">
            <form class="" style="height: 100%;">
                @csrf
                <div class="full-width pr-5 right mb-2">
                    <label for="name">NOME:</label>
                    <input class="input-3" type="text" name="name">
                </div>

                <div class="full-width pr-5 right mb-2">
                    <label for="cpf">CPF:</label>
                    <input class="input-3" type="text" name="cpf">
                </div>

                <div class="full-width pr-5 right mb-2">
                    <label for="cnpj">CNPJ:</label>
                    <input class="input-3" type="text" name="cnpj">
                </div>

                <div class="full-width mb-2 right pr-5">
                    <label for="email">EMAIL:</label>
                    <input class="input-3" type="text" name="email">
                </div>

                <div class="full-width mb-2 right pr-5">
                    <label for="tel">TELEFONE:</label>
                    <input class="input-3" type="text" name="tel">
                </div>

                <h5 class="mt-3" style="color: black;">ENDEREÇO</h5>

                <div class="full-width mb-2 right pr-5">
                    <label for="city">CIDADE:</label>
                    <input class="input-3" id="city" type="text" name="city">
                </div>

                <div class="full-width mb-2 right pr-5">
                    <label for="road">RUA:</label>
                    <input class="input-3" id="road" type="text" name="road">
                </div>

                <div class="full-width mb-2 right pr-5">
                    <label for="district">BAIRRO:</label>
                    <input class="input-3" type="text" name="district">
                </div>

                <div class="full-width mb-2 right pr-5">
                    <label for="number">NÚMERO:</label>
                    <input class="input-3" type="text" name="number">
                </div>

                <div class="full-width mb-2 right pr-5">
                    <textarea id="observation" placeholder="Coloque observações aqui..."
                        style="height: 100px; width: 65%;"></textarea>
                </div>

                <div class="pt-4">
                    <button class="rounded-pill btn btn-sm btn-danger mr-5" type="reset">Cancelar</button>
                    <button class="rounded-pill btn btn-sm btn-success ml-5" type="submit">Confirmar</button>
                </div>
            </form>
        </div>
    </div>

    <script src="" async defer></script>
</body>

</html>
