<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tela nova linha">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">


    <title>Nova Linha</title>
</head>
<style>
    .container {
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .card_form {
        width: 400px;
        height: 300px;
        position: relative;
        display: flex;
        height: 200px;
        background-color: #295C8A;
        border-radius: 10px;
    }

    .card_form form {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 0px
    }

    .div_input {
        width: 100%;
    }

    .div_input {
        display: flex;
        flex-direction: row;
        justify-content: center;

    }

    
    .div_botao{
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        margin-top: 50px;
    }

    label {
        color: white;
        margin-inline-end: 8px;
    }

    h2 {
        text-align: center;
        font-size: 30px;
        font-weight: 700;
        line-height: 49px;

    }

</style>

<body>
    <x-layout />
    <div class="container" style="min-height: 200px;">
        <h2 class="text-main font-monospace ">NOVA LINHA</h2>

        <div class="card_form" style="">
            <form class="" style="" action="{{ route('new_linha_do') }}" method="POST">
                @csrf
                <div class="div_input" style="">
                    <label for="linha" class="col-form-label" style="color: white;">LINHA:</label>
                    <input id="linha" type="text" name="linha" class="form-control" style="width: 35%;"
                        placeholder="">
                </div>
                <div class="div_botao">
                    <button class="rounded-pill btn btn-md btn-cancelar" onClick="goBack()"
                        type="reset">Cancelar</button>
                    <button class="rounded-pill btn btn-md btn-green" type="submit">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
    <x-footer />
</body>

</html>
