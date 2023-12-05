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
    <div class="curso">

      <h2>Inscrição no Curso: {{ $curso->titulo }}</h2>

      <form method="POST" action="{{ route('inscricoes.store', $curso->id) }}">
        @csrf

        <div class="marign">
          <label for="nome">Nome:</label>
          <input type="text" name="nome" id="nome" class="form-control" value="{{ auth()->user()->name }}" required readonly>
        </div>

        <div class="margin">
          <label for="email">E-mail:</label>
          <input type="email" name="email" id="email" class="form-control" value="{{ auth()->user()->email }}" required readonly>
        </div>

        <div class="margin">
          <label for="forma_pagamento">Forma de Pagamento:</label>
          <select name="forma_pagamento" id="forma_pagamento" class="form-control" required>
            <option value="cartao_credito">Cartão de Crédito</option>
            <option value="boleto">Boleto Bancário</option>
            <option value="paypal">PayPal</option>
          </select>
        </div>

        {{-- Adicione outros campos do formulário conforme necessário --}}

        <button type="submit" class="btn btn-primary">Enviar Inscrição</button>
      </form>
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