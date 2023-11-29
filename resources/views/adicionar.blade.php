<!DOCTYPE html>
<html lang="en">

<head>

    <title>Adicionar</title>
</head>

<body>
    <form method="post" action="{{route('adicionar_conta')}}">
        @csrf
        <label for=" valor">Valor:</label>
        <input type="number" name="valor" step="0.01">
        <br>

        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao">
        <br>

        <label for="dt_ven">Data de vencimento:</label>
        <input type="date" name="dt_ven">
        <br>

        <label for="tipo">Tipo:</label>
        <select name="tipo">
            <option value="Pagar">A pagar</option>
            <option value="Receber">A receber</option>
        </select>
        <br>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>