<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de Orçamento</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('site/style.css')}}">
</head>

<body>

    <x-layout/>
    
    <h2>Lista de Orçamento</h2>

    <div class="col-lg-12" style="text-align: right; margin-bottom: 0.5%;">
        <a type="button" class="btn btn-primary btn-sm">ADICIONAR +</a>
    </div>>

    <div class="card table">
        <table class="table table-sm center">
            <thead>
                <tr>
                <th scope="col" class="table_first_row">CLIENTE</th>
                <th scope="col" class="table_first_row">CPF</th>
                <th scope="col" class="table_first_row">CNPJ</th>
                <th scope="col" class="table_first_row">TELEFONE</th>
                <th scope="col" class="table_first_row">ENDERECO</th>
                <th scope="col" class="table_first_row">DATA DE EMISSÃO</th>
                <th scope="col" class="table_first_row">Q. PRODUTO</th>
                <th scope="col" class="table_first_row">VALOR TOTAL</th>
                <th scope="col" class="table_first_row">STATUS</th>
                <th scope="col" class="table_first_row">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="table_rows">Eleanor Pena</td>
                <td class="table_rows">111.111.111-22</td>
                <td class="table_rows">-</td>
                <td class="table_rows">(77) 95558-8523</td>
                <td class="table_rows">R.Augustina,45-Vila Nova,Guanambi</td>
                <td class="table_rows">26/05/2021</td>
                <td class="table_rows">10</td>
                <td class="table_rows">R$16.000,00</td>
                <td class="table_rows">Aprovado</td>
                <td class="table_rows">editar  excluir</td>
                </tr>
                <tr>
                <td class="table_rows">Jacob Jones</td>
                <td class="table_rows"> 222.222.222-TX</td>
                <td class="table_rows">-</td>
                <td class="table_rows">(77) 93258-8555</td>
                <td class="table_rows">Trav.João do Pulo,369-Lagoinha,Guanambi</td>
                <td class="table_rows">29/05/2021</td>
                <td class="table_rows">6</td>
                <td class="table_rows">R$10.000,00</td>
                <td class="table_rows">Pendente</td>
                <td class="table_rows">editar  excluir</td>
                </tr>
            </tbody>
        </table>
    </div>

    <x-footer/>
</body>

</html>