<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Novo Usuário</title>
        <meta name="description" content="Tela de novo usuário">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <x-content/>

    </head>

    <body>

        <x-layout/>
        <div class="py-4 center">
            <h2 class="text-black font-monospace py-4">Novo Cliente</h2>

            <div class="card-generico center-div text-white pr-5" style="min-width: 700px;height: 100%;">
                <form class="" style="height: 100%;" method="POST" action="{{route('new_cliente_do')}}">
                    @csrf
                    <div class="full-width pr-5 right mb-2">
                        <label for="name">Nome:</label>
                        <input id="name" class="input-3" type="text" name="name" required>
                    </div>

                    <div class="full-width pr-5 right mb-2">
                        <label for="cpf">CPF:</label>
                        <input id="cpf" class="input-3" type="text" name="cpf">
                    </div>

                    <div class="full-width pr-5 right mb-2">
                        <label for="cnpj">CNPJ:</label>
                        <input id="cnpj" class="input-3" type="text" name="cnpj">
                    </div>

                    <div class="full-width mb-2 right pr-5">
                        <label for="email">Email:</label>
                        <input id="email" class="input-3" type="text" name="email" required>
                    </div>

                    <div class="full-width mb-2 right pr-5">
                        <label for="tel">Telefone:</label>
                        <input id="tel" class="input-3" type="text" name="telefone" required>
                    </div>

                    <h5 class="mt-3 space">Endereço</h5>

                    <div class="full-width mb-2 right pr-5">
                        <label for="city">Cidade:</label>
                        <input id="city" class="input-3" id="city" type="text" name="cidade" required>
                    </div>

                    <div class="full-width mb-2 right pr-5">
                        <label for="road">Rua:</label>
                        <input id="road" class="input-3" id="road" type="text" name="rua" required>
                    </div>

                    <div class="full-width mb-2 right pr-5">
                        <label for="district">Bairro:</label>
                        <input id="district" class="input-3" type="text" name="bairro" required>
                    </div>

                    <div class="full-width mb-2 right pr-5">
                        <label for="number">Número:</label>
                        <input id="number" class="input-3" type="text" name="numero" required>
                    </div>

                    <div class="full-width mb-2 right pr-5">
                        <textarea id="observation" name="observacao" placeholder="Coloque observações aqui..."
                            style="height: 100px; width: 65%;"></textarea>
                    </div>

                    <div class="pt-4">
                        <a href="{{route('dashboard')}}" class="rounded-pill btn btn-sm btn-danger mr-5" type="reset">Cancelar</a>
                        <button class="rounded-pill btn btn-sm btn-success ml-5" type="submit">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>

        <x-footer/>

    </body>

</html>
