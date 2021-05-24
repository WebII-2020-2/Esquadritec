<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Tela de novo material">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/app.css">
    <title>Material</title>
</head>

<body>
    <form method="POST" action="{{ route('new_material_do') }}">
        @csrf
        <input type="text" name="nome" placeholder="NOME">

        <select name="unidade" placeholder="unidade">
            @foreach($unidades as $unidade)
            <option value="volvo">{{$unidade}}</option>
            @endforeach
        </select>

        <input type="number" name="valor" placeholder="VALOR">
        <input type="submit" value="ENVIAR">
    </form>
    <script src="" async defer></script>
</body>

</html>
