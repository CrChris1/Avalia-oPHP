<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Alterar Time</title>
  <link rel="stylesheet" href="/css/Cadastro.css">
</head>
<body>
  <form class="cadastro" action="/editar_time/{{$time->id}}" method="post">
    @csrf
    {{ method_field("PUT") }}
    <label for="name">Nome</label>
    <input type="text" name="name" value="{{$time->name}}">

    <label for="jogador">Jogador</label>
    <input type="text" name="jogador" value="{{$time->jogador}}">

    <input type="submit" value="Alterar">
</form>
</body>
</html>