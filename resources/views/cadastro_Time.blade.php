<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Time</title>
    <link rel="stylesheet" href="/css/Cadastro.css">
</head>
<body>
<form class="cadastro" action="/criar_time" method="post">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name" required>

        <label for="jogador">Jogador</label>
        <select name="jogador" id="jogador" required>
            <option value="">Selecione um jogador</option>
            @foreach($jogadores as $jogador)
                <option value="{{ $jogador->id }}">{{ $jogador->name }}</option>
            @endforeach
        </select>

        <input type="submit" value="Salvar">

        <a href="/" class="btn-back">Voltar ao inicio</a>

    </form>
</body>
</html>
