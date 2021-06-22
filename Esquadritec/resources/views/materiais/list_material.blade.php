<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de Materiais</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('site/style.css')}}">
</head>

<body>

    <style>
        @-webkit-keyframes opacity {
            0% {
                opacity: 0;
            }

            30% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        @-moz-keyframes opacity {
            0% {
                opacity: 0;
            }

            30% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        @-o-keyframes opacity {
            0% {
                opacity: 0;
            }

            30% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes opacity {
            0% {
                opacity: 0;
            }

            30% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        body {
            padding: 10px;
        }

        .menu_bar {
            margin-left: -10px;
            margin-right: -10px;
            margin-top: -10px;
            margin-bottom: 20px;
        }

        #alert {
            opacity: 0;
            -webkit-animation: opacity 5s;
            /* Safari 4+ */
            -moz-animation: opacity 5s;
            /* Fx 5+ */
            -o-animation: opacity 5s;
            /* Opera 12+ */
            animation: opacity 5s;
            /* IE 10+, Fx 29+ */
        }

        .toHome {
            text-align: center;
            display: flex;
            justify-content: center;
            text-decoration: none;
            color: white;
        }

        .toHome:hover {
            text-decoration: none;
            color: white;
        }

        #menu_bar {
            background-image: url("{{asset('img/logo.png')}}");
            position: absolute;
            width: 100%;
            height: 120px;
            top: 0;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav {
            -webkit-box-shadow: 20px 20px 20px #3a3a3ae5;
            -moz-box-shadow: 20px 20px 20px #3a3a3ae5;
            box-shadow: 20px 20px 20px #3a3a3ae5;
        }

        .sidenav .content {
            width: 220px;
            padding: 5px 0px 0px 9px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0px;
            height: 20px;
            padding: 0px;
            width: 30px;
            right: 10px;
            font-size: 20px;
            margin-left: 100%;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        .content_menu {
            display: none;
            font-size: 20px;
        }

        ul {
            list-style-type: none;
            padding-left: 0px;
            margin-left: 15px;
        }
    </style>
    <script>
        function icons(id){
            var doc = document.getElementById(id);
            if (doc.style.display != "block"){
                doc.style.display = "block"
            }else{
                doc.style.display = "none"
            }
        }
    </script>

    <div class="menu_bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-main">
            <div class="container-fluid  row">
                <!-- barra de menu slice -->
                <span style="cursor: pointer;" class="navbar-brand text-light" onclick="openNav()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </span>

                <div id="mySidenav" class="sidenav bg-main">
                    <div id="menu_bar" class="logo">
                        <!-- <h5 class="text-light" style="position: absolute; bottom: 0;">ESQUADRITEC</h5>-->
                    </div>
                    <a href="javascript:void(0)" class="closebtn text-light text-decoration-none"
                        onclick="closeNav()"><b>&times;</b></a>

                    <a href="#" onclick="icons('content_1')" class="content text-light"
                        style="margin-top:60px">Cliente</a>
                    <ul id="content_1" class="content_menu">
                        <li>
                            <!--Mudei a rota aqui pq a rota lista cliente tá com problema-->
                            <a href="{{route('new_cliente')}}" class="content text-light">Listar Clientes</a>
                        </li>
                        <li>
                            <a href="{{route('new_cliente')}}" class="content text-light">Novo Cliente</a>
                        </li>
                    </ul>

                    <a href="#" onclick="icons('content_2')" class="content text-light">Usuário</a>
                    <ul id="content_2" class="content_menu">
                        <li>
                            <a href="{{route('new_cliente')}}" class="content text-light">Listar Usuários</a>
                        </li>
                        <li>
                            <a href="{{route('user_create')}}" class="content text-light">Novo Usuário</a>
                        </li>
                    </ul>

                    <a href="#" onclick="icons('content_3')" class="content text-light">Material</a>
                    <ul id="content_3" class="content_menu text-light">
                        <li>
                            <a href="{{ route('list_material') }}" class="content text-light">Listar Materiais</a>
                        </li>
                        <li>
                            <a href="{{route('new_material')}}" class="content text-light">Novo Material</a>
                        </li>
                    </ul>

                    <a href="#" onclick="icons('content_4')" class="content text-light">Modelo</a>
                    <ul id="content_4" class="content_menu">
                        <li>
                            <a href="{{route('listModelo')}}" class="content text-light">Listar Modelos</a>
                        </li>
                        <li>
                            <a href="{{route('new_modelo')}}" class="content text-light">Novo Modelo</a>
                        </li>
                    </ul>

                    <a href="{{route('logout')}}" class="content text-light">Sair</a>
                </div>
                <div>
                    <a class="toHome" href="{{route('dashboard')}}">ESQUADRITEC</a>
                </div>
                <!-- ------------------------------------------- -->
                <div style="text-align: center; display: flex;justify-content: center; width:100%;"
                    class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button class="btn btn-outline-success" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </div>


    <h2>Lista de Materiais</h2>
    <button type="button" class="btn btn-primary btn-sm">ADICIONAR +</button>

    <div class="card table">
        <table class="table table-sm center">

            <thead>
                <tr>
                    <th scope="col" class="table_first_row">#</th>
                    <th scope="col" class="table_first_row">Nome</th>
                    <th scope="col" class="table_first_row">Unidade de Medida</th>
                    <th scope="col" class="table_first_row">Valor</th>
                    <th scope="col" class="table_first_row">Código</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($materiais as $material)
                <tr>

                    <td class="table_rows">{{ $material->id }}</td>
                    <td class="table_rows">{{ $material->nome}}</td>
                    <td class="table_rows">{{ $material->unidade_medida->unidade }}</td>
                    <td class="table_rows">{{ $material->valor }}</td>
                    <td class="table_rows">{{ $material->codigo }}</td>

                    <td class="row">
                        <form method="GET" action="{{route('show_material', ['id'=>$material->id])}}">
                            <button class="btn" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-card-list" viewBox="0 0 16 16">
                                    <path
                                        d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                    <path
                                        d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                                </svg>
                            </button>
                        </form>

                        <form method="GET" action="{{route('edite_material', ['id'=>$material->id])}}">
                            <button class="btn" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </button>
                        </form>

                        <form method="GET" action="{{route('delete_material', ['id'=>$material->id])}}">
                            <button class="btn" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd"
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg>
                            </button>
                        </form>
                    </td>

                </tr>
                @endforeach



            </tbody>
        </table>
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
        function goBack() {
            window.history.back();
        }
    </script>

    <script src="{{ asset('site/jquery.js') }}" async defer></script>
    <script src="{{ asset('site/bootstrap.js') }}" async defer></script>
</body>

</html>
