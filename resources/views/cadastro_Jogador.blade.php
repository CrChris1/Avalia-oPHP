<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Jogador</title>
    <link rel="stylesheet" href="/css/Cadastro.css">
</head>
<body>
<form class="cadastro" action="/criar_jogador" method="post">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name">

        <label for="idade">Idade</label>
        <input type="text" name="idade">

        <label for="time">Time</label>
        <input type="text" name="time">

        <input type="submit" value="Salvar">

        <a href="/" class="btn-back">Voltar ao Inicial</a>

    </form>
</body>
</html>