<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Novo Usuário</title>
        <meta name="description" content="Tela de novo usuário">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css">

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

    </head>
    <body>

        <div class="container card center" style="">
        <h2 class="container card center">NOVO CLIENTE</h2>
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <form method="POST" action="{{ route('user_store') }}">
                        @csrf
                        <input type="text" name="name" placeholder="NOME:">
                        <input type="text" name="cpf" placeholder="CPF:">
                        <input type="text" name="cnpj" placeholder="CNPJ:">
                        <input type="text" name="email" placeholder="EMAIL:">
                        <input type="text" name="tel" placeholder="TELEFONE:">
                        <h5 class="container card center">ENDEREÇO</h5>
                        <input type="text" name="city" placeholder="CIDADE:">
                        <input type="text" name="cpf" placeholder="CPF:">
                        <input type="text" name="cnpj" placeholder="CNPJ:">
                        <input type="text" name="email" placeholder="EMAIL:">
                        <input type="text" name="tel" placeholder="TELEFONE:">
                        <button class="btn btn-lg btn-primary btn-block input" type="submit">Cancelar</button>
                        <button class="btn btn-lg btn-primary btn-block input" type="submit">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>

        <script src="" async defer></script>
    </body>
</html>