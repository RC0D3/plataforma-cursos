<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CursosMill | Planos</title>
    @vite(['resources/css/app.css', 'resources/css/planos.css'])
</head>

<body>
    <main class="main">

        <div class="home">
            <a href="{{ url('/') }}">
                &lt;</a>
        </div>
        <h1>Conheça os nossos planos</h1>
        <div class="container">
            <div class="box">
                <h2>Básico</h2>
                <p>Um plano básico que cabe no seu bolso.</p>
                <ul>
                    <li>10+ Cursos</li>
                    <li>Certificados com desconto</li>
                </ul>
            </div>

            <div class="box">
                <h2>Prata</h2>
                <p>Um plano intermediário que cabe no seu bolso.</p>
                <ul>
                    <li>50+ Cursos</li>
                    <li>Certificados gratuitos (Consultar)</li>
                    <li>Baixar aulas</li>
                    <li>Podcasts</li>
                </ul>
            </div>

            <div class="box">
                <h2>Ouro</h2>
                <p>Um plano básico que cabe no seu bolso.</p>
                <ul>
                    <li>100+ Cursos</li>
                    <li>Certificados gratuitos </li>
                    <li>Baixar aulas</li>
                    <li>Podcasts</li>
                    <li>Chat com Inteligência Artifical</li>
                </ul>
            </div>
        </div>
    </main>
</body>

</html>