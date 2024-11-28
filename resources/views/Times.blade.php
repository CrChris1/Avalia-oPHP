<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lista de Times</title>
  <link rel="stylesheet" href="/css/Lista.css">
</head>
<body> 
  @if(empty($times) || count($times) == 0)
    <h3>Nenhum time encontrado</h3>      
  @else
  <table border="1">
    <tr>
      <th>Nome</th>
      <th>Jogador</th>
      <th>Ações</th>
    </tr>
    @foreach ($times as $time)
        <tr>
          <td>{{$time->name}}</td>
          <td>{{$time->jogador}}</td>
          <td>
            <form method="POST" action="/deletar_time/{{$time->id}}" style="display:inline-block;">
              @csrf
              {{ method_field("DELETE") }}
              <input type="submit" value="delete" class="btn-delete">
            </form>

            <a href="/editar_time/{{$time->id}}" class="btn-edit">Editar</a>
          </td>
        </tr>
    @endforeach
  </table>       
  @endif
  <a href="/" class="btn-back">Voltar ao Inicial</a>
</body>
</html>
