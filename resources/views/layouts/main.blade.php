<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/home.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,100..900;1,9..144,100..900&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&family=Fraunces:ital,opsz,wght@0,9..144,100..900;1,9..144,100..900&display=swap"
        rel="stylesheet">
</head>

<body class="">
    <div class="container" id="container">
        <header class="header">
            <nav class="menuBox">
                <div class="logoBox">
                    <label class="logo">Jc <span>Vagas</span></label>
                </div>
                <ul class="menu">
                    <li class="itemMenu">
                        <a href="/" class="menuLink">Home</a>
                    </li>
                    <li class="itemMenu">
                        <a href="/listarvagas" class="menuLink special">Vagas</a>
                    </li>
                    @auth
                    <li class="itemMenu">
                        <a href="/vagas/criarvaga" class="menuLink special">Criar Vagas</a>
                    </li>
                    <li class="itemMenu">
                        <form action="/logout" method="post">
                            @csrf

                            <a href="/logout" class="menuLink special" onclick="event.preventDefault();
                                    this.closest('form').submit()">
                                    Sair
                            </a>
                        </form>
                    </li>
                    @endauth
                    <li class="itemMenu">
                        <a href="/#sectionAbout" class="menuLink">Sobre</a>
                    </li>
                    @guest
                        <li class="itemMenu">
                        <a href="/login" class="menuLink special">Login</a>
                    </li>
                    @endguest
                    
                    

                </ul>
            </nav>
        </header>
        <main class="containerMain">
            <div class="mainBox">
                @yield('content')
            </div>
        </main>
        <footer class="footer">
            <div class="footerBox">
                <div class="subBox JcBox">
                    <a href="" class="logo fh">Jc Vagas</a>
                    <p>Encontre sua próxima grande oportunidade</p>
                    <p>
                        A jc Vagas é uma plataforma virada exclusivamente na divulgação de vagas de trabalho. Não temos
                        portanto, a objectivo de contratar ninguem
                    </p>
                </div>
                <div class="subBox BoxSocial">
                    <h4 class=" fh">Redes Sociais</h4>
                    <a href="" class="socialLink">Facebook</a>
                    <a href="" class="socialLink">Instagram</a>
                    <a href="" class="socialLink">LinkedIn</a>
                </div>
                <div class="subBox BoxParceiros">
                    <h4 class=" fh">Parceiros</h4>
                    <a href="" class="parceirosLink">Casa Educa</a>
                    <a href="" class="parceirosLink">JC codes</a>
                    <a href="" class="parceirosLink">Digita</a>
                </div>
            </div>
            <p class="copywrite">JCassalaxe&copy;2024</p>

        </footer>
    </div>

    <script src="/js/script.js"></script>
</body>

</html>
