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
    <h1>A CursosMill tem tudo que você precisa</h1>
    <ul class="categorias">
      <li><a href="#">Programação</a></li>
      <li><a href="#">Culinária</a></li>
      <li><a href="#">Engenharia</a></li>
      <li><a href="#">Gastronomia</a></li>
      <li><a href="#">Ciêcias</a></li>
      <li><a href="#">Nutrição</a></li>
    </ul>
    <span class="divider"></span>
    <h3 class="hot">EM ALTA</h3>
    <div class="cursos-box">
      @foreach($cursos as $curso)
      <div class="curso">
        <h3>{{$curso->titulo}} <small>- {{ $curso->categoria }} ({{ $curso->avaliacoes }})</small></h3>
        <p>{{$curso->descricao}}</p>
        <h4>Apenas R${{$curso->preco}} <small>
            <p>Instrutor: {{$curso->instrutor}}</p>
          </small>
        </h4>


        <a href="{{url("/cursos/$curso->id")}}">Mais informações </a>
      </div>
      @endforeach
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