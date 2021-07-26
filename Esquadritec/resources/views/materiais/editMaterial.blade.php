<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-content/>
    <title>Cadastro material</title>
</head>
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

    label {
        color: white;
    }

    h2 {
        font-size: 30px;
        font-weight: 650;
        line-height: 49px;
        text-align: center;

    }
    .card-generico form{
        height: 700px;
        display: flex;
        flex-direction: column;
        align-items: center;

    }
    .campo{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        
        padding: 10px;
    }
    .btns{
        width: 323px;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        margin-top: 23px;
    }
    .input1{
        width: 210px;
    }
    .input2{
        width: 210px;
    }
    .input3{
        width: 210px;
    }
    .input4{
        width: 210px;
    }
    
    form input{
        border-radius: 10px;
        border: 0;
        padding: 8px;
    }
    form select{
        border-radius: 10px;
        border: 0;
        padding: 8px;
    }
</style>

<body>

    <x-layout />


    <div class="py-4 center" style="min-height: 200px;">
        <h2 class="text-main font-monospace ">EDITAR MATERIAL {{strtoupper($material->nome)}}</h2>

        <div class="card-generico center-div bg-main" style="width: 500px; height: 350px;">
            <form class="" style="height: 100%;" method="POST" action="{{ route('edite_material_do') }}">
                @csrf
                <input type="hidden" name="id" value="{{$material->id}}">
                <div class="campo" style="width: 300px;">
                    <label for="nome" class="pr-2 col-form-label" style="color: white">Material:</label>
                    <input id="nome" class="input1" type="text" name="nome" class="form-control" value="{{$material->nome}}">
                </div>
                <div class="campo" style="width: 300px;">
                    <label for="codigo" class="pr-2 col-form-label" style="color: white">Código:</label>
                    <input id="codigo" class="input2" type="text" name="codigo" class="form-control" value="{{$material->codigo}}">
                </div>
                <div class="campo" style="width: 300px;">
                    <label for="valor" class="pr-2 col-form-label" style="color: white">Valor:</label>
                    <input id="valor" class="input2" type="number" name="valor" class="form-control" value="{{$material->valor}}">
                </div>
                <div class="full-width" style="height:100px;">
                    <div class="title full-width row col-12">
                        <div class="col-4 full-width">Unidade Medida</div>
                        <div class="col-4 full-width">Peso/UN</div>
                        <div class="col-4 full-width">Linha</div>
                    </div>
                    <div class="full-width row col-12">
                        <div class="col-4 full-width">
                            <select id="inputUnidadeMedida"  name="unidade_medida" class="select form-select form-control">
                                @foreach ($unidades as $unidade)
                                    @if($unidade->id == $material->unidade_medida)
                                        <option value="{{ $unidade->id }}" selected>{{ $unidade->unidade }}</option>
                                    @else
                                        <option value="{{ $unidade->id }}">{{ $unidade->unidade }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-4 full-width">
                            <div class="full-width">
                                <input id="peso" class="full-width" type="text" name="peso" value="{{$material->peso}}" required>
                            </div>
                        </div>
                        <div class="col-4 full-width">
                            <select id="linha" class="input-5 full-width" name="linha" required>
                                @foreach ($linhas as $lin)
                                    @if($lin->id == $material->linha)
                                        <option value="{{$lin->id}}" selected>{{$lin->linha}}</option>
                                    @else
                                        <option value="{{$lin->id}}">{{$lin->linha}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="btns">
                    <button class="rounded-pill btn btn-md btn-cancelar" onClick="goBack()"
                        type="reset">Cancelar</button>
                    <button class="rounded-pill btn btn-md btn-green" type="submit">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
    <x-footer />

</body>

</html>
