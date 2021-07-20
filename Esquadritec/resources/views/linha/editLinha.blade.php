<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tela nova linha">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-content/>


    <title>Nova Linha</title>
</head>

<body>
    <x-layout/>
    <div class="py-4 center" style="min-height: 200px; margin-top:2%;">
        <h2 class="text-main font-monospace" style="margin-bottom:2%;">IDITAR LINHA</h2>

        <div class="card-generico center-div" style="width: 500px;min-height: 100%;">
            <form class="" style="height: 100%;" action="{{route('edite_linha_do')}}" method="POST">
                @csrf
                <input type="hidden" value="{{$linha->id}}" name="id">
                <div class="row p-3 center-div pt-5" style="width: 300px;">
                    <label for="linha" class="pr-2 col-form-label   " style="color: white">LINHA:</label>
                    <input id="linha" type="text" name="linha" class="form-control" value="{{$linha->linha}}" placeholder="">
                </div>
                <div>
                    <button class="rounded-pill btn btn-md btn-cancelar mx-4 m-2" onClick="goBack()" type="reset">Cancelar</button>
                    <button class="rounded-pill btn btn-md btn-green m-2" type="submit">Atualizar</button>
                </div>
            </form>
        </div>
    </div>

    <x-footer/>
</body>

</html>
