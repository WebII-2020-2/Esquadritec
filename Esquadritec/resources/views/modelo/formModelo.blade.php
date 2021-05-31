<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tela novo modelo">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('site/style.css')}}">


    <title>Novo modelo</title>
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

    }

    .navbar.custom {
        width: 50%;
    }

    .right-addon input {
        padding-right: 30px;
    }

    .inner-addon {
        position: relative;
    }
</style>

<body>

    <nav class="navbar navbar-light bg-main">
        <div class="container-fluid">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand text-white px-2 m-0" href="#">ESQUADRITEC</a>

            </div>
            <div class="inner-addon right-addon">
                <i class="glyphicon glyphicon-search"></i>
                <input type="text" class="form-control" placeholder="Search" />
            </div>

            <a class="navbar-brand text-white" href="#">User</a>


    </nav>

    <div class="collapse navbar-collapse  bg-main" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active text-white" href="#">Funcionário</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-white" href="#">Cliente</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-white" href="#">Orçamento</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-white" href="#">Material</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-white" href="#">Modelo</a>
            </li>
        </ul>
    </div>

    </div>

    </nav>



    <div class="py-4 center" style="min-height: 200px;">
        <h2 class="text-main font-monospace ">NOVO MODELO</h2>

        <div class="card center-div" style="width: 500px;min-height: 100%;">
            <form class="" style="height: 100%;">
                @csrf
                <div class="row p-3 center-div pt-5" style="width: 300px;">
                    <label for="modelo" class="pr-2 col-form-label" style="color: white">MODELO:</label>
                    <input id="modelo" type="text" name="modelo" class="form-control" placeholder="">
                </div>
                <div class="center-div bottom-div w-auto">
                    <button class="rounded-pill btn btn-md btn-cancelar mx-4" type="submit">Cancelar</button>
                    <button class="rounded-pill btn btn-md btn-green" type="submit">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>

</html>
   