<!DOCTYPE html>
<html lang="en">

<head>

    <title>Adicionar</title>
</head>

<body>
    <form action="{{ route('updateReceber', $conta->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for=" valor">Valor:</label>
        <input type="number" name="valor" step="0.01" value="{{$conta->valor}}">
        <br>

        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" value="{{$conta->descricao}}">
        <br>

        <label for=" dt_ven">Data de vencimento:</label>
        <input type="date" name="dt_ven" value="{{$conta->dt_ven}}">
        <br>

        <label for="tipo">Status:</label>
        <select name="status">
            <option value="pendente" {{ $conta->status === 'pendente' ? 'selected' : '' }}>Pendente</option>
            <option value="recebido" {{ $conta->status === 'recebido' ? 'selected' : '' }}>Recebido</option>
        </select>
        <br>
        <button type="submit">Salvar</button>

    </form>
</body>

</html>