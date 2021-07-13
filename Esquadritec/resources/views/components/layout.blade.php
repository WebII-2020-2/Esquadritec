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
        position: fixed;
        z-index: 999;
        border-bottom: solid 2px white;
        width: 100%;
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
    .space{
        margin-bottom:50px;
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
    .navItens{
        padding: 0px;
        margin:0px;
        width:100%;
        height: 50px;
    }

    ul {
        list-style-type: none;
        padding-left: 0px;
        margin-left: 15px;
    }

    /* Menu bar - ajustado com flexBox */
    .menu_bar{
        width: 100%;
    }
    .navItens{
        
    }
    .section1{
        width: 100%;
        height: 100%;
        position: relative;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
    }
    .sub_itens{
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }

    .pesquisar{
        position: relative;
        display: flex;
        flex-direction: row;
    }

    .form_pesquisar{
        position: relative;
        display: flex;
        flex-direction: row;
        align-items: center;
    }
    .botao{
        height: 100%;
    }
    .input_pesquisar{
        height: 30px;
    }
    .user{
        margin-right: 15px;
    }

    .btn{
        padding: 0px 12px;
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
    <nav class="navItens bg-main">
        <div class="section1" style="">
            <!-- barra de menu slice -->
            <div class="menu_lateral" style="margin-left: 15px">
                <span style="cursor: pointer;" class="navbar-brand text-light" onclick="openNav()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list"
                        viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </span>
            </div>
            <div class="sub_itens" style="">
                
                <div id="mySidenav" class="sidenav bg-main">
                    <div id="menu_bar">
                        <h3 style="color: white;">Esquadritec</h3>
                    </div>
                    <a href="javascript:void(0)" class="closebtn text-light text-decoration-none"
                        onclick="closeNav()"><b>&times;</b></a>

                    <a href="#" onclick="icons('content_4')" class="content text-light" style="margin-top:60px">Orçamento</a>
                    <ul id="content_4" class="content_menu">
                        <li>
                            <a href="{{route('list_orcamento')}}" class="content text-light">Listar Orçamento</a>
                        </li>
                        <li>
                            <a href="{{route('new_orcamento')}}" class="content text-light">Novo Orçamento</a>
                        </li>
                    </ul>

                    <a href="#" onclick="icons('content_1')" class="content text-light">Cliente</a>
                    <ul id="content_1" class="content_menu">
                        <li>
                            <!--Mudei a rota aqui pq a rota lista cliente tá com problema-->
                            <a href="{{route('list_cliente')}}" class="content text-light">Listar Clientes</a>
                        </li>
                        <li>
                            <a href="{{route('new_cliente')}}" class="content text-light">Novo Cliente</a>
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

                    <a href="#" onclick="icons('content_5')" class="content text-light">Modelo</a>
                    <ul id="content_5" class="content_menu">
                        <li>
                            <a href="{{route('list_modelo')}}" class="content text-light">Listar Modelos</a>
                        </li>
                        <li>
                            <a href="{{route('new_modelo')}}" class="content text-light">Novo Modelo</a>
                        </li>
                    </ul>

                    <a href="#" onclick="icons('content_6')" class="content text-light">Linha</a>
                    <ul id="content_6" class="content_menu">
                        <li>
                            <a href="{{route('list_linha')}}" class="content text-light">Listar Linhas</a>
                        </li>
                        <li>
                            <a href="{{route('new_linha')}}" class="content text-light">Nova Linha</a>
                        </li>
                    </ul>

                    <a href="#" onclick="icons('content_2')" class="content text-light">Funcionário</a>
                    <ul id="content_2" class="content_menu">
                        <li>
                            <a href="{{route('list_funcionario')}}" class="content text-light">Listar Funcionários</a>
                        </li>
                        <li>
                            <a href="{{route('new_funcionario')}}" class="content text-light">Novo Funcionário</a>
                        </li>
                    </ul>

                    <a href="{{route('logout')}}" class="content text-light">Sair</a>
                </div>
                <div class="esquadritec"  style="">
                    <a class="toHome" href="{{route('dashboard')}}">ESQUADRITEC</a>
                </div>
                <div class="pesquisar">
                    <form class="form_pesquisar">
                        <input class="input_pesquisar form-control" style="" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button class="btn btn-outline-success" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                    </form>
                </div>
                <div class="user" style="">
                    <form action="{{route('show_user', ['id'=>$user->id])}}">
                        <button type="submit" style="background-color:transparent; border:none;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</div>
<div class="space"></div>
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
