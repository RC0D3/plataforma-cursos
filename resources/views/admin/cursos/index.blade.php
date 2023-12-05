<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CursosMill | Portal Admin</title>

  @vite(['resources/css/app.css','resources/css/painel.css'])

</head>

<body>
  <main class="main">

    <div class="home">
      <a href="{{url('/')}}">
        &lt;</a>
    </div>
    <div class="painel">

      <h3 class="title">Portal Admin</h3>
      <a href="{{ route('cursos.create') }}" class="btn">Adicionar Curso</a>

      @if ($cursos->count() > 0)
      <table style="width: 100%;">
        <thead>
          <tr>
            <th>Título</th>
            <th>Instrutor</th>
            <th>Carga Horária</th>
            <th>Preço</th>
            <th>Disponibilidade</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($cursos as $curso)
          <tr>
            <td>{{ $curso->titulo }}</td>
            <td>{{ $curso->instrutor }}</td>
            <td>{{ $curso->carga_horaria }}</td>
            <td>{{ $curso->preco }}</td>
            <td>{{ 'Disponível' }}</td>
            <td>
              <a href="{{ route('cursos.edit', $curso->id) }}">Editar</a>|
              <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Tem certeza?')">Excluir</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @else
      <p>Nenhum curso disponível.</p>
      @endif
    </div>
  </main>
</body>

</html>