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
    <h1 class="title">Portal Admin</h1>
    <div class="form-box">
      <form method="POST" action="{{ route('cursos.update', $curso->id) }}">
        @csrf
        @method('PUT')

        <label for="nome">Editar nome do curso</label>
        <select name="categoria" id="nomeCurso">
          <option value="Programação" {{ $curso->categoria == 'Programação' ? 'selected' : '' }}>Programação</option>
          <option value="Culinária" {{ $curso->categoria == 'Culinária' ? 'selected' : '' }}>Culinária</option>
          <option value="Engenharia" {{ $curso->categoria == 'Engenharia' ? 'selected' : '' }}>Engenharia</option>
          <option value="Gastronomia" {{ $curso->categoria == 'Gastronomia' ? 'selected' : '' }}>Gastronomia</option>
          <option value="Ciências" {{ $curso->categoria == 'Ciências' ? 'selected' : '' }}>Ciências</option>
          <option value="Nutrição" {{ $curso->categoria == 'Nutrição' ? 'selected' : '' }}>Nutrição</option>
        </select>

        <input type="text" name="titulo" placeholder="Novo nome do curso" value="{{ $curso->titulo ?? '' }}">

        <label for="descrição">Mudar a descrição</label>
        <textarea name="descricao" id="descricao" cols="30" rows="10" placeholder="Digite a nova descrição do curso">{{ $curso->descricao ?? '' }}</textarea>

        <label for="carga">Carga Horária</label>
        <input type="text" id="cargaHoraria" name="carga_horaria" placeholder="Nova carga horária" value="{{ $curso->carga_horaria ?? '' }}">

        <label for="professor">Nome do professor</label>
        <input type="text" placeholder="Digite o nome do professor" name="instrutor" id="nomeProf" value="{{ $curso->instrutor ?? '' }}">

        <label for="preco">Preço do curso</label>
        <input type="number" step="0.01" id="preco" name="preco" required value="{{ $curso->preco ?? '' }}">

        <div class="btns">
          <button class="btn" id="cancelBtn"><a href="{{ url('/') }}">Cancelar</a></button>
          <button class="btn" id="sumitBtn" type="submit">Salvar</button>
        </div>
      </form>


    </div>
  </main>
</body>

</html>