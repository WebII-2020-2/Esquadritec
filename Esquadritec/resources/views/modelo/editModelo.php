<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de Modelos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('site/style.css')}}">
    <script>
        function submitForm(id, type){
            if(type == 'editar'){
                var form = document.getElementById('form');
                var input = document.getElementById('idInput');
                form.action="";
                input.value=id;
                form.submit();
            }
        }
    </script>
</head>

<body>
    <x-layout/>
    <h2>Lista de Modelos</h2>
    <a type="button" class="btn btn-primary btn-sm" href="{{route('new_modelo')}}">ADICIONAR +</a>

    <div class="card table">
        <table class="table table-sm center">
            <thead>
                <tr>
                <th scope="col" class="table_first_row">NOME</th>
                <th scope="col" class="table_first_row">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <form it="form" method="POST" action="">
                    <input it="idInput" name="id" type="hidden" value=""/>
                </form>
                    @foreach ($Modelos as $model)
                        <tr>
                            <td class="table_rows">{{$model->modelo}}</td>
                            <td class="table_rows">
                                <button onClick=<?php echo "submitForm($model->id, 'editar')"; ?>>
                                    <?php echo $model->id; ?>
                                </button>
                                <button onClick=<?php echo "submitForm($model->id, 'excluir')"; ?>>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>

    @if(session()->has('errors'))
        <div style="text-align: center; display: flex;justify-content: center; width:100%; z-index:1;">
            <p id="alert" class="alert alert-warning" role="alert" style="width:200px;">{{session()->get('errors')}}</p>
        </div>
    @elseif(session()->has('succes'))
        <div style="text-align: center; display: flex;justify-content: center; width:100%; z-index:1;">
            <p id="alert" class="alert alert-success" role="alert" style="width:200px;">{{session()->get('succes')}}</p>
        </div>
    @endif

    <script src="{{ asset('site/jquery.js') }}" async defer></script>
    <script src="{{ asset('site/bootstrap.js') }}" async defer></script>
</body>

</html>