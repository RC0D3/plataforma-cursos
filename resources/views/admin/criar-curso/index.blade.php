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
      <form method="POST" action="{{ url('/') }}">
        @csrf
        <label for="nome">Editar nome do curso</label>

        <select name="curso" id="nomeCurso">

          <option value="curso">Curso 01</option>
          <option value="curso">Curso 02</option>
          <option value="curso">Curso 03</option>
          <option value="curso">Curso 04</option>
          <option value="curso">Curso 04</option>
          <option value="curso">Curso 05</option>
        </select>
        <input type="text" placeholder="Novo nome do curso">

        <label for="descrição">Mudar a descrição</label>
        <textarea name="descricao" id="descricao" cols="30" rows="10" placeholder="Digite a nova descrição do curso"></textarea>

        <label for="carga">Carga Horária</label>
        <input type="text" id="cargaHoraria" placeholder="Nova carga horária">

        <label for="professor">Nome do professor</label>
        <input type="text" placeholder="Digite o nome do professor" id="nomeProf">

        <label for="preco">Preço do curso</label>
        <input type="text" id="precoCurso" placeholder="Digite o preço do curso">

        <label for="certificado">Possui certificado?</label>
        <select name="certificado" id="certificado">
          <option value="option">Sim</option>
          <option value="option">Não</option>
        </select>
        <div class="btns">
          <button class="btn" id="cancelBtn"><a href="{{ url('/') }}">Cancelar</a></button>
          <button class="btn" id="sumitBtn" type="submit">Salvar</button>
        </div>
      </form>

    </div>
  </main>
</body>

</html>