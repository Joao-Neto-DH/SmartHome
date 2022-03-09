<!DOCTYPE html>
<html lang="{{str_replace('_','-',app()->getlocale())}}" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="João Baptista Dala Lima Neto">
    <meta name="keywords" content="Smarthome, Layout, CSS3 e HTML5">
    <meta name="description" content="Estilização de website usando CSS puro">

    <link rel="stylesheet" href="/asset/css/smarthome.css">
    <title>@yield('title')</title>
</head>
<body class="dark-theme">
    <header>
        <div class="container">
            <div class="navbar">
                <div class="navbar-group">
                    <img src="/asset/img/logo.svg" alt="Smarthome logo" width="150" class="navbar-brand">
                    <button class="navbar-toggle">Toogle</button>
                </div>
                <div class="navbar-group">
                    Other functionality
                </div>
            </div>
        </div>
    </header>
    <div class="main">
        <div class="main-content">
            <aside class="menu">
                <div class="user">
                    <img src="/asset/img/user.svg" alt="User Image" class="user-img shadow">
                    <a href="#" class="user-name user-text">My Home</a>
                    <p class="user-adress user-text">Luanda/Viana casa nº123</p>
                </div>
                <nav>
                    <ul class="nav">
                        <li class="nav-item active">
                            <a href="#" class="nav-link">
                                <span class="nav-icon"><img src="/asset/img/home-icon.svg" alt="home icon"></span>
                                <p class="nav-text">Casa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="nav-icon"><img src="/asset/img/device-icon.svg" alt="device icon"></span>
                                <p class="nav-text">Dispositivos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="nav-icon"><img src="/asset/img/chart-icon.svg" alt="analytics icon"></span>
                                <p class="nav-text">Analíticos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="nav-icon"><img src="/asset/img/rule-icon.svg" alt="rule icon"></span>
                                <p class="nav-text">Réguas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="nav-icon"><img src="/asset/img/gallery-icon.svg" alt="gallery icon"></span>
                                <p class="nav-text">Galeria</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="nav-icon"><img src="/asset/img/history-icon.svg" alt="history icon"></span>
                                <p class="nav-text">Histórico</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="nav-icon"><img src="/asset/img/settings-icon.svg" alt="settings icon"></span>
                                <p class="nav-text">Definições</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>
            <main class="content">
                @yield('content')
            </main>
        </div>
        @yield('quick-acess')
    </div>
    @yield('js')
</body>
</html>