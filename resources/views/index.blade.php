<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav>
        <a href="{{route('adicionar')}}">Adicionar Conta</a>
    </nav>
    <table>
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Valor </th>
                <th>Data de vencimento</th>
                <th>Status</th>
                <th>Tipo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>

            @foreach($contas as $conta)
            <tr>
                <td>{{ $conta->descricao }}</td>
                <td>{{ $conta->valor }}</td>
                <td>{{ $conta->dt_ven }}</td>
                <td>{{ $conta->status }}</td>
                <td>{{ $conta->tipo }}</td>
                <td><a
                        href="@if ($conta->tipo === 'Pagar'){{route('editPagar', ['id'=>$conta->id])}} @else {{route('editReceber', ['id'=>$conta->id])}} @endif">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
    <p>
        Total a receber = {{$totalReceber}} <br>
        Total a pagar = - {{$totalPagar}} <br>
        Total Geral = {{$total}} <br>

    </p>
</body>

</html>