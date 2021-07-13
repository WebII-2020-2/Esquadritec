<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tela nova linha">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">


    <title>Nova Unidade de Medida</title>
</head>
<style>
    .car_form {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .formulario {
        width: 410px;
        height: 150px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: #295C8A;
        border-radius: 10px;     
    }
    .div_input1{
        display: flex;
        flex-direction: row;
    }
    .div_input2{
        display: flex;
        width: 100%;
        flex-direction: row;
        justify-content: space-around;
    }

</style>

<body>
    <x-layout />
    <div class="py-4 center" style="min-height: 200px;">
        <h2 class="text-main font-monospace ">NOVA UNIDADE DE MEDIDA</h2>

        <div class="car_form" style="">
            <form class="formulario" action="{{ route('new_unidade_do') }}" method="POST">
                @csrf
                <div class="div_input1">
                    <label for="unidade" class="pr-2 col-form-label   " style="color: white">UNIDADE:</label>
                    <input id="unidade" type="text" name="unidade" class="form-control" placeholder="">
                </div>
                <div class="div_input2" style="margin-top: 30px">
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
