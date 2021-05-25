<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Novo Usuário</title>
        <meta name="description" content="Tela de novo usuário">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('site/style.css')}}">

        <style>
            #body{
                color: blue;
            }

            .center{
                text-align: center;
            }

            .full-width{
                width: 100%;
            }

            .input{
                position:relative;
                padding-top:10px;
                margin-top:10px;
            }

            .card{
                padding: 20px;
                background-color: #318A90;
                border-radius: 28px;
            }

            .btn{
                height: 30px;
                text-align: center;
            }
            .right{
                text-align:right;
            }
            .input-3{
                width: 65%;
            }
        </style>

    </head>
    <body>

        <div class="pt-3 container center">
        <h2  class="">NOVO CLIENTE</h2>
            <div class="pt-5 card" style="color: white;min-width:600px;">

                    <div class="row justify-content-md-center full-width"style="min-width:500px;">
                        <div class="center" style="max-width:500px;">
                            <form style="width:500px;" method="POST" action="{{ route('user_store') }}">
                                @csrf
                                <div class="full-width mb-2 right pr-5">
                                    <label for="name">NOME:</label>
                                    <input class="input-3" type="text" name="name">
                                </div>

                                <div class="full-width mb-2 right pr-5">
                                    <label for="cpf">CPF:</label>
                                    <input class="input-3" type="text" name="cpf">
                                </div>

                                <div class="full-width mb-2 right pr-5">
                                    <label for="cnpj">CNPJ:</label>
                                    <input class="input-3" type="text" name="cnpj"> 
                                </div>

                                <div class="full-width mb-2 right pr-5">
                                    <label for="email">EMAIL:</label>
                                    <input class="input-3" type="text" name="email">    
                                </div>

                                <div class="full-width mb-2 right pr-5">
                                    <label for="tel">TELEFONE:</label>
                                    <input class="input-3" type="text" name="tel">    
                                </div>
                    
                                <h5 class="mt-3" style="color: black;">ENDEREÇO</h5>
                                
                                <div class="full-width mb-2 right pr-5">
                                    <label for="city">CIDADE:</label>
                                    <input class="input-3" id="city" type="text" name="city">   
                                </div>
                                
                                <div class="full-width mb-2 right pr-5">
                                    <label for="road">RUA:</label>
                                    <input class="input-3" id="road" type="text" name="road">   
                                </div>
                                
                                <div class="full-width mb-2 right pr-5">
                                    <label for="district">BAIRRO:</label>
                                    <input class="input-3" type="text" name="district">   
                                </div>

                                <div class="full-width mb-2 right pr-5">
                                    <label for="number">NÚMERO:</label>
                                    <input class="input-3"  type="text" name="number">   
                                </div>
                                
                                <div class="full-width mb-2 right pr-5">
                                    <textarea id="observation" placeholder="Coloque observações aqui..." style="height: 100px; width: 295px;"></textarea>  
                                </div>

                                <div class="pt-4">
                                    <button class="rounded-pill btn btn-sm btn-danger mr-5" type="reset">Cancelar</button>
                                    <button class="rounded-pill btn btn-sm btn-success ml-5" type="submit">Confirmar</button>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>        

        <script src="" async defer></script>
    </body>
</html>