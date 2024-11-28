<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Alterar Jogador</title>
  <link rel="stylesheet" href="/css/Cadastro.css">
</head>
<body>
  <form class="cadastro" action="/editar_jogador/{{$jogador->id}}" method="post">
    @csrf
    {{ method_field("PUT") }}
    <label for="name">Nome</label>
    <input type="text" name="name" value="{{$jogador->name}}">

    <label for="idade">Idade</label>
    <input type="text" name="idade" value="{{$jogador->idade}}">

    <label for="time">Time</label>
    <input type="text" name="time" value="{{$jogador->time}}">

    <input type="submit" value="Alterar">
</form>
</body>
</html>