<script>

    function PDF() {
        var conteudo  = document.getElementById('conteudo');
        var doc = new jsPDF('p', 'pt', 'letter');
        doc.fromHTML(document.body)
        doc.save("orcamento.pdf");
    }

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
    function setStatus(){
        var button = document.getElementById("status")
        var buttonHid = document.getElementById("statusHid")

        if (button.value == "PENDENTE"){
            button.value = "APROVADO";
            buttonHid.value = "APROVADO";
            button.style.backgroundColor = "green";
        } else if(button.value == "APROVADO"){
            button.value = "RECUSADO";
            buttonHid.value = "RECUSADO";
            button.style.backgroundColor = "red";
        } else{
            button.value = "PENDENTE";
            buttonHid.value = "PENDENTE";
            button.style.backgroundColor = "blue";
        }
    }
</script>

<style>
     .card-generico {
        padding: 20px;
        padding-bottom: 0.5%;
        background-color: #295C8A;
        border-radius: 28px;
    }

    .card-generico tr{
        color: white;
    }

    .card-orcamento-previo-principal{
        width: 90%;
        margin-left: 5%;
        padding: 3%;
        padding-bottom: 0.5%;
        border-radius: 28px;
        border-color: blue;
    }
    .card-orcamento-previo{
        padding: 20px;
        padding-bottom: 0.5%;
        background-color: #CCCCCC;
        border-radius: 28px;
        border-style: solid;
    }

    .card-orcamento-previo td{
        background: #799091;
    }   

    .card-generico button{
        color: white;
    }

    .card-orcamento-produto{
        padding: 2%;
        margin: 6%;
        margin-bottom: 2%; 
        border-radius: 25px;
        background: #CCCCCC;
    }

    .editar-orcamento {
        width: 72%;
        margin-left: 15%;
    }

    .editar-orcamento-cliente {
        padding: 20px;
        padding-bottom: 2.5%;
        margin: 2% 2% 4% 2%;
        border-radius: 28px;
    }

    .editar-orcamento-orcamento {
        padding: 20px;
        padding-bottom: 2.5%;
        margin: 2% 2% 4% 2%;
        border-radius: 28px;
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

    #body {
        color: blue;
    }

    .full-width {
        width: 100%;
    }

    .input {
        position: relative;
        padding-top: 10px;
        margin-top: 10px;
    }

    .btn {
        height: 30px;
        text-align: center;
    }

    .right {
        text-align: right;
    }

    .input-3 {
        width: 45%;
        border-radius: 10px;
        border: solid 1px white;
    }

    .input-4 {
        width: 40%;
        border-radius: 10px;
        border: solid 1px white;
    }

    h2 {
        font-size: 30px;
        font-weight: 650;
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

    .content_menu {
        display: none;
        font-size: 20px;
    }

    ul {
        list-style-type: none;
        padding-left: 0px;
        margin-left: 15px;
    }

    .coar_graphic{
        width:100%;
        border-radius: 10px;
        border:solid 1px #295C8A;
        display:inline-block;
        padding:10px;
        margin-top:20px;
    }

    .background_card {
        border-radius: 28px;
        height: 455px;
    }

</style>

@if(session()->has('error'))
    <div class="absolute-center" style="position:absolute; text-align: center; display: flex;justify-content: center; width:100%; z-index:9999;">
        <p id="alert" class="alert alert-warning" role="alert" style="width:200px;">{{session()->get('error')}}</p>
    </div>
@elseif(session()->has('succes'))
    <div class="absolute-center" style="position:absolute; text-align: center; display: flex;justify-content: center; width:100%; z-index:9999;">
        <p id="alert" class="alert alert-success" role="alert" style="width:200px;">{{session()->get('succes')}}</p>
    </div>
@endif

<script src="{{ asset('site/jquery.js') }}" async defer></script>
<script src="{{ asset('site/bootstrap.js') }}" async defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js" integrity="sha384-THVO/sM0mFD9h7dfSndI6TS0PgAGavwKvB5hAxRRvc0o9cPLohB0wb/PTA7LdUHs" crossorigin="anonymous"></script>
