<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Novo Produto</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('site/style.css')}}">
    </head>
    <style>
    body {
        color: white;
    }
    .background_card {
        border-radius: 28px;
        height: 455px;
    }

    .table {
        background-color: #CCCCCC;
        border-radius: 20px;
        margin-top: 10px;
        color: white;
    }

    .table_first_row {
        background-color: #000000c0;
        border-radius: 20px;
    }

    .table_rows {
        background-color: #799091;
        border-radius: 20px;
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

    h2 {
        font-size: 30px;
        font-weight: 650;
        line-height: 49px;
        text-align: center;

    }
</style>

    <body>
    <div class="container" style="width: 100%">
        <div class="row">
            <div class="col">
                <h2 class="text-main font-monospace ">ADICIONAR PRODUTO</h2>
            </div>
        </div>

    </div>
    <div class="card center-div background_card bg-main" style="width: 600px;min-height: 100%;">
        <form class=" g-3 pt-4">
            @csrf
            <div class="form-group">

                <label for="produto" class=" pl-4">PRODUTO:</label>
                <input class="col-8" id="produto" type="text" name="produto" class="px-1" placeholder="">
            </div>

            <div class="full-width form-group row px-0">
                <label for="modelo" class="col-form-label pl-4">MODELO:</label>
                <div class="col-sm-4 pl-1">
                    <input id="modelo" type="text" name="modelo" class="form-control px-1" placeholder=""
                        style="width: 110px">
                </div>
                <label for="linha" class="col-form-label pl-5">LINHA:</label>
                <div class="col-sm-4 pl-1">
                    <input id="linha" type="text" name="linha" class="form-control  px-1" style="width: 70px"
                        placeholder="">
                </div>
            </div>
            <button class="center-div rounded-pill btn btn-sm btn-green mt-4 btn-block"
            type="submit">MATERIAL</button>

            <div class="card table">
                <table class="table table-borderless table-sm center">
                    <thead>
                        <tr>
                        <th scope="col" class="table_first_row">PRODUTO</th>
                        <th scope="col" class="table_first_row">MEDIDA</th>
                        <th scope="col" class="table_first_row">R$/UN</th>
                        <th scope="col" class="table_first_row">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="table_rows">ALUMÍNIO</td>
                        <td class="table_rows">20 KG</td>
                        <td class="table_rows">R$ 20</td>
                        <td class="table_rows">Excluir  Editar</td>
                        </tr>
                        <tr>
                        <td class="table_rows">VIDRO</td>
                        <td class="table_rows">10 M</td>
                        <td class="table_rows">R$ 30</td>
                        <td class="table_rows">Excluir  Editar</td>
                        </tr>
                        <tr>
                        <td class="table_rows">MAÇANETA</td>
                        <td class="table_rows">5 UN</td>
                        <td class="table_rows">R$ 25</td>
                        <td class="table_rows">Excluir  Editar</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="full-width row pt-4" style="text-align: center">
                <div class="col-sm-6 pr-0">
                    <button class="rounded-pill btn btn-md btn-cancelar " type="submit">Cancelar</button>
                </div>
                <div class="col-sm-6 pl-0">
                    <button class="rounded-pill btn btn-md btn-green " type="submit">Adicionar</button>
                </div>
            </div>
        </form>
    </div>
    </div>
        
        <script src="{{ asset('site/jquery.js') }}" async defer></script>
        <script src="{{ asset('site/bootstrap.js') }}" async defer></script>
    </body>

</html>