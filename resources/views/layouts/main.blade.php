<!DOCTYPE html>
<html lang="{{str_replace('_','-',app()->getlocale())}}" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <img src="/asset/img/home.svg" alt="User Image" class="user-img shadow">
                    <a href="#" class="user-name user-text">My Home</a>
                    <p class="user-adress user-text">Luanda/Viana casa nº123</p>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">
                            <span class="nav-icon"></span>
                            <p class="nav-text">Overview</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="nav-icon"></span>
                            <p class="nav-text">Overview</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="nav-icon"></span>
                            <p class="nav-text">Overview</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="nav-icon"></span>
                            <p class="nav-text">Overview</p>
                        </a>
                    </li>
                </ul>
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