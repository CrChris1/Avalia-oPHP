<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Listar Jogadores</title>
  <link rel="stylesheet" href="/css/Lista.css">
</head>
<body> 
  @if(empty($jogadores) || count($jogadores) == 0)
    <h3>Nenhum jogador encontrado.</h3>      
  @else
  <table>
    <tr>
      <th>Nome</th>
      <th>Idade</th>
      <th>Time</th>
      <th>Ações</th>
    </tr>
    @foreach ($jogadores as $jogador)
        <tr>
          <td>{{$jogador->name}}</td>
          <td>{{$jogador->idade}}</td>
          <td>{{$jogador->time}}</td>
          <td>
            <form method="POST" action="/deletar_jogador/{{$jogador->id}}" style="display:inline-block;">
              @csrf
              {{ method_field("DELETE") }}
              <input type="submit" value="Excluir" class="btn-delete">
            </form>

            <a href="/editar_jogador/{{$jogador->id}}" class="btn-edit">Editar</a>
          </td>
        </tr>
    @endforeach
  </table>       
  @endif
  <a href="/" class="btn-back">Voltar ao Inicial</a>
</body>
</html>
