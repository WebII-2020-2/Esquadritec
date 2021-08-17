<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-content/>
    <title>Cadastro material</title>
</head>
<body>

    <x-layout />
    <div class="py-4 center">
            <h2 class="text-dark font-monospace py-4">Novo Material</h2>

            <div class="card-generico center-div text-white" style="width: 500px;height: 100%;">
                <form class="" style="height: 100%; width: 100%;" method="POST" action="{{route('new_material_do')}}">
                    @csrf
                    <div class="full-width" style="height:100px;">
                        <div class="title full-width row col-12">
                            <div class="col-6 full-width">Material</div>
                            <div class="col-6 full-width">Código</div>
                        </div>
                        <div class="full-width row col-12">
                            <div class="col-6">
                                <input id="material" class="input-5" type="text" name="nome" required>
                            </div>
                            <div class="col-6">
                                <input id="codigo"class="input-5" type="text" name="codigo" required>
                            </div>
                        </div>
                    </div>
                    <div class="full-width" style="height:100px;">
                        <div class="title full-width row col-12">
                            <div class="col-3 full-width">Medida</div>
                            <div class="col-3 full-width">Peso/UN</div>
                            <div class="col-4 full-width">Linha</div>
                            <div class="col-2 full-width">Valor</div>
                        </div>
                        <div class="full-width row col-12">
                            <div class="col-3 full-width">
                                <select id="inputUnidadeMedida"  name="unidade_medida" class="input-5">
                                    @foreach ($unidades as $unidade)
                                        <option value="{{ $unidade->id }}">{{ $unidade->unidade }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3 full-width">
                                <div class="full-width">
                                    <input id="peso" class="full-width input-5" type="text" name="peso" required>
                                </div>
                            </div>
                            <div class="col-4 full-width">
                                <select id="linha" class="input-5" name="linha" required>
                                    @foreach ($linhas as $lin)
                                        <option value="{{$lin->id}}">{{$lin->linha}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-2">
                            <input type="number" class="" style="width: 149%; border-radius: 10px; border: solid 1px white;" placeholder="0.00" required name="valor" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                            </div>
                        </div>
                    </div>

                    <div class="pt-4" style="margin-bottom:4%;">
                        <a href="{{route('dashboard')}}" class="rounded-pill btn btn-sm btn-danger mr-5" type="reset">Cancelar</a>
                        <button class="rounded-pill btn btn-sm btn-success ml-5" type="submit">Confirmar</button>
                    </div>
                </form>
    </div>
    <x-footer/>

</body>

</html>
