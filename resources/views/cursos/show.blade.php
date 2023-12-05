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
    <div class="curso">

      <h2>{{ $curso->titulo }}</h2>
      <span class="divider"></span>
      <div>
        <p><strong>Instrutor:</strong> {{ $curso->instrutor }}</p>
        <p><strong>Categoria:</strong> {{ $curso->categoria }}</p>
        <p><strong>Preço:</strong> {{ $curso->preco }}</p>
        <p><strong>Avaliações:</strong> {{ $curso->avaliacoes }}</p>
        <p><strong>Descrição:</strong> {{ $curso->descricao }}</p>

        <p><strong>Carga Horária:</strong> {{ $curso->carga_horaria }}</p>

        <p><strong>Pré-Requisitos:</strong> {{ $curso->pre_requisitos }}</p>

      </div>


      @if ($estaInscrito)
      <!-- Exibir o vídeo ou qualquer outra informação para usuários inscritos -->
      <p>Vídeo do curso:</p>
      <iframe width="560" height="315" src="{{ $curso->video_url }}" frameborder="0" allowfullscreen></iframe>
      @else
      <a class="btn login-btn" href="{{ route('inscricoes.create', $curso->id) }}">Inscreva-se</a>
      @endif




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