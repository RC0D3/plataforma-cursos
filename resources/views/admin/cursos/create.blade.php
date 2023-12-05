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
      <form method="POST" action="{{ route('cursos.store') }}">
        @csrf
        <label for="nome">Editar nome do curso</label>

        <select name="categoria" id="nomeCurso">
          <option value="Programação">Programação</option>
          <option value="Culinária">Culinária</option>
          <option value="Engenharia">Engenharia</option>
          <option value="Gastronomia">Gastronomia</option>
          <option value="Ciências">Ciências</option>
          <option value="Nutrição">Nutrição</option>
        </select>
        <input type="text" name="titulo" placeholder="Novo nome do curso">

        <label for="descrição">Mudar a descrição</label>
        <textarea name="descricao" id="descricao" cols="30" rows="10" placeholder="Digite a nova descrição do curso"></textarea>

        <label for="carga">Carga Horária</label>
        <input type="text" id="cargaHoraria" name="carga_horaria" placeholder="Nova carga horária">

        <label for="professor">Nome do professor</label>
        <input type="text" placeholder="Digite o nome do professor" name="instrutor" id="nomeProf">
        <label for="professor">Url Video</label>
        <input type="text" placeholder="URL Youtube" name="video_url" required>

        <label for="professor">Pré-Requisitos</label>
        <input type="text" name="pre_requisitos" required>

        <label for="preco">Preço do curso</label>
        <input type="number" step="0.01" name="preco" placeholder="Preço" value="{{ old('preco') }}" min="0.01" max="999.99">

        <label for="preco">Avaliações</label>
        <input type="number" step="0.1" name="avaliacoes" placeholder="Avaliações" value="{{ old('avaliacoes') }}">


        <div class="btns">
          <button class="btn" id="cancelBtn"><a href="{{ url('/') }}">Cancelar</a></button>
          <button class="btn" id="sumitBtn" type="submit">Salvar</button>
        </div>
      </form>

    </div>
  </main>
</body>

</html>