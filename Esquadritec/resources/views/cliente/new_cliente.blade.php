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
                top: 100px;
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
                width: 1008pxpx;
                background: #318A90;
                border-radius: 28px;
            }

            .btn{
                height: 30px;
                text-align: center;
            }
        </style>

    </head>
    <body>

        <h2>NOVO CLIENTE</h2>
        <div class="container card center" style="">

                <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                        
                        <form method="POST" action="{{ route('user_store') }}">
                            @csrf
                            <div class="rounded-pill form-group mb-2">
                                <label for="name">NOME:</label>
                                <input type="text" name="name">
                            </div>

                            <div class="form-group mb-2">
                                <label for="cpf">CPF:</label>
                                <input type="text" name="cpf">
                            </div>

                            <div class="form-group mb-2">
                                <label for="cnpj">CNPJ:</label>
                                <input type="text" name="cnpj"> 
                            </div>

                            <div class="form-group mb-2">
                                <label for="email">EMAIL:</label>
                                <input type="text" name="email">    
                            </div>

                            <div class="form-group mb-2">
                                <label for="tel">TELEFONE:</label>
                                <input type="text" name="tel">    
                            </div>
                
                            <h5 class="mt-3">ENDEREÇO</h5>
                            
                            <div class="form-group mb-2">
                                <label for="city">CIDADE:</label>
                                <input type="text" name="city">   
                            </div>
                            
                            <div class="form-group mb-2">
                                <label for="road">RUA:</label>
                                <input type="text" name="road">   
                            </div>
                            
                            <div class="form-group mb-2">
                                <label for="district">BAIRRO:</label>
                                <input type="text" name="district">   
                            </div>

                            <div class="form-group mb-2">
                                <label for="number">NÚMERO:</label>
                                <input type="text" name="number">   
                            </div>
                            
                            <div class="form-group mb-2">
                                <label for="observation">OBSERVAÇÕES:</label>
                                 <input type="text" name="observation">   
                            </div>

                            <div class="full-width p-2" >
                                <button class="rounded-pill btn btn-md btn-danger" type="submit">Cancelar</button>
                                <button class="rounded-pill btn btn-md btn-success" type="submit">Confirmar</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>

        <script src="" async defer></script>
    </body>
</html>