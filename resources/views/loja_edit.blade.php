<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Loja</title>
</head>

<body>
    <h1>Editar Loja</h1>
    <form action="{{ route('update_loja', $loja->id) }}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" value="{{ $loja->nome }}"/></td>
            </tr>
            <tr>
                <td>Descrição:</td>
                <td><textarea name="descricao" id="" cols="30" rows="10">{{ $loja->descricao }}</textarea></td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <input type="submit" name='confirmar' value="Salvar"/>
                    <input type="submit" name='confirmar' value="Cancelar"/>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>