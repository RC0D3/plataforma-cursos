<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CursoMill | Plataforma de Cursos Online</title>
  @vite('resources/css/app.css')
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <header>
    <nav class="navbar">
      <h2 class="logo">CursosMill</h2>
      <ul class="ul">
        <li><a href="{{url('/')}}">Cursos</a></li>
        <li><a href="{{ route('planos') }}">Planos</a></li>
        <li><a href="{{ route('sobre') }}">Sobre</a></li>
        @auth
        @hasrole('admin')
        <li><a href="{{ route('dashboard') }}">Admin</a></li>
        @endhasrole
        @endauth
      </ul>
      @if (Route::has('login'))
      @auth
      <form method="POST" action="{{ route('logout') }}">
        @csrf

        <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                this.closest('form').submit();" class="btn login-btn"> Sair</a>
      </form>
      @else
      <a class="btn login-btn" href="{{ route('login') }}">Login</a>
      @endauth
      @endif

      <div class="toggle" onclick="toggleMenu()">
        <i class='openIcon bx bx-menu'></i>
        <i class='closeIcon bx bx-x' style="display: none;"></i>
      </div>
    </nav>
  </header>
  <main class="main">
    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif
    <div class="painel">

      <h2>Detalhes do Aluno</h2>
      <span class="divider"></span>
      <div>
        <p><strong>ID:</strong> {{ $aluno->id }}</p>
        <p><strong>Nome:</strong> {{ $aluno->name }}</p>
        <p><strong>Email:</strong> {{ $aluno->email }}</p>
      </div>
      <div>
        <h3>Cursos Inscritos:</h3>
        @if ($aluno->cursos->count() > 0)
        <ul>
          @foreach ($aluno->cursos as $curso)
          <li>
            <strong>Curso:</strong> {{ $curso->titulo }}
            <br>
            <strong>Data de Inscrição:</strong> {{ $curso->pivot->created_at }}
            <br>
            <strong>Status da Inscrição:</strong> Inscrito

          </li> @endforeach
        </ul>
        @else
        <p>O aluno não está inscrito em nenhum curso.</p>
        @endif
      </div>

      <div style="display: inline-flex;">
        <a href="{{ route('alunos.edit', $aluno->id) }}" class="btn">Editar</a>
        <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" onclick="return confirm('Tem certeza?')" class="btn">Excluir</button>
        </form>
      </div>


    </div>
  </main>
  <footer class="footer">
    <h4>CursosMill</h4>
    <p>Todos os direitos reservados &copy;</p>
    <h4>Desde 2023</h4>
  </footer>

  <script src="{{Vite::asset('resources/js/index.js')}}"></script>
</body>

</html>