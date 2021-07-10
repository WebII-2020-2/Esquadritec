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

    .card {
        padding: 20px;
        background-color: #295C8A;
        border-radius: 28px;
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

</style>

<script src="{{ asset('site/jquery.js') }}" async defer></script>
<script src="{{ asset('site/bootstrap.js') }}" async defer></script>
