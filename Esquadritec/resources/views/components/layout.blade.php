<style>
    @-webkit-keyframes opacity {
        0%{ opacity: 0; }
        30%{ opacity: 1; }
        100%{ opacity: 0; }
    }
    @-moz-keyframes opacity {
        0%{ opacity: 0; }
        30%{ opacity: 1; }
        100%{ opacity: 0; }
    }
    @-o-keyframes opacity {
        0%{ opacity: 0; }
        30%{ opacity: 1; }
        100%{ opacity: 0; }
    }
    @keyframes opacity {
        0%{ opacity: 0; }
        30%{ opacity: 1; }
        100%{ opacity: 0; }
    }

    body{
        padding:10px;
    }
    .menu_bar{
        margin-left:-10px;
        margin-right:-10px;
        margin-top:-10px;
        margin-bottom:20px;
    }

    #alert {
        opacity: 0;
        -webkit-animation:opacity 5s; /* Safari 4+ */
        -moz-animation:opacity 5s; /* Fx 5+ */
        -o-animation:opacity 5s; /* Opera 12+ */
        animation:opacity 5s; /* IE 10+, Fx 29+ */
    }
    .toHome{
        text-align: center;
        display: flex;
        justify-content: center;
        text-decoration: none;
        color:white;
    }
    .toHome:hover{
        text-decoration: none;
        color: white;
    }

    .sidenav {    
        -webkit-box-shadow: 20px 20px 20px #3a3a3ae5;
        -moz-box-shadow: 20px 20px 20px #3a3a3ae5;
        box-shadow: 20px 20px 20px #3a3a3ae5;
    }

    #menu_bar {
        background-image: url("{{asset('img/logo.png')}}");
        position: absolute;
        width: 100%;
        height: 120px;
        top: 0;
    }

</style>

<div class="menu_bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-main">
        <div class="container-fluid  row">
        <!-- barra de menu slice -->
            <span style="cursor: pointer;" class="navbar-brand text-light" onclick="openNav()">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
            </span>
<<<<<<< HEAD
            <div id="mySidenav" class="sidenav bg-main">
                <div id="menu_bar" class="logo"></div>
                <a href="javascript:void(0)" class="closebtn text-light text-decoration-none" onclick="closeNav()">&times;</a>
                <a href="{{route('user_create')}}" class="text-light text-decoration-none">Novo usuário</a>
                <a href="{{route('new_material')}}" class="text-light text-decoration-none">Novo material</a>
                <a href="{{route('new_cliente')}}" class="text-light text-decoration-none">Novo Cliente</a>
                <a href="{{route('list_modelo')}}" class="text-light text-decoration-none">Modelo</a>
                <a href="{{route('new_modelo')}}" class="text-light text-decoration-none">Novo Modelo</a>
=======
            <div id="mySidenav" class="sidenav text-white">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="{{route('user_create')}}">Novo usuário</a>
                <a href="{{route('new_material')}}">Novo material</a>
                <a href="{{route('new_cliente')}}">Novo Cliente</a>
                <a href="{{route('listModelo')}}">Modelo</a>
                <a href="{{route('new_modelo')}}">Novo Modelo</a>
>>>>>>> a06d1968c487d9cad8025ef05ead9e0deb7cdd0d

                <a href="{{route('logout')}}" class="text-light text-decoration-none">Sair</a>
            </div>
            <div>
                <a class="toHome" href="{{route('dashboard')}}">ESQUADRITEC</a>
            </div>
        <!-- ------------------------------------------- -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
            <div style="text-align: center; display: flex;justify-content: center; width:100%;" class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-success" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </nav>
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