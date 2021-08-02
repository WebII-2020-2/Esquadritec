<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tela novo modelo">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-content/>

    <title>Novo modelo</title>
</head>
<style>
    .card_principal{
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        border-radius: 28px;

    }

     .formulario{
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px
    }

    .sub_card{
        width: 343px;
        background-color: #295C8A;
        border-radius: 8px;
        height: 150px;     
    }

    .label_modelo{
        margin-left: 100px;
    }
    .botoes{
        width: 300px;
        margin-top: 25px;
        display: flex;
        flex-direction:row;
        justify-content: space-around;


    }
    #modelo{
        width: 150px;
    }
 
    h2{
        text-transform: uppercase;
        text-align: center;
        font-size: 22px;
    }
</style>
    <body>
        <x-layout/>
        <h2 class="font-monospace ">Novo Modelo</h2>
        <div class="card_principal">

            <div class="sub_card">
                <form class="formulario" method="POST" action="{{ route('new_modelo_do') }}">
                    @csrf
                    <div class="row">
                        <label id="label_modelo" for="modelo" class="pr-2 col-form-label" style="color: white">Modelo:</label>
                        <input id="modelo" type="text" name="modelo" class="form-control input-3" placeholder="">
                    </div>
                    <div class="botoes">
                        <button class="rounded-pill btn btn-sm btn-danger ml-2" onClick="goBack()" type="reset">Cancelar</button>
                        <button class="rounded-pill btn btn-sm btn-success ml-5" type="submit">Adicionar</button>
                    </div>
                </form>
            </div>

        </div>

        <x-footer/>
    </body>
</html>
   