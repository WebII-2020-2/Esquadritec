<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Novo Orçamento</title>
        <meta name="description" content="Tela de novo usuário">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('site/style.css')}}">

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

            h2 {
                font-size: 30px;
                font-weight: 650;
            }

        </style>

    </head>

    <body>
    
        <x-layout/>
        <div class="py-4 center">

            <h2 class="text-dark font-monospace py-4">Novo Orçamento</h2>

            <div class="card center-div text-white" style="min-width: 700px;height: 100%;">
                <form class="" style="height: 100%; width: 100%;" method="POST" action="{{route('user_create_do')}}">
                    @csrf
                    <div class="full-width mb-2 center">
                        <label for="cliente">Cliente:</label>
                        <input id="cliente" class="input-3" type="text" name="cliente" required>
                    </div>

                    <div class="full-width mb-2 center">
                        <textarea id="observation" name="observacao" placeholder="Observações"
                            style="height: 100px; width: 65%; border-radius: 10px;"></textarea>
                    </div>

                    <div class="pt-4">
                        <a href="{{route('dashboard')}}" class="rounded-pill btn btn-sm btn-danger mr-5" type="reset">Cancelar</a>
                        <button class="rounded-pill btn btn-sm btn-success ml-5" type="submit">Seguir</button>
                    </div>
                </form>
            </div>
        </div>

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>

        @endif

        @if($errors->all())
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        @endif

        <x-footer/>
    </body>
</html>