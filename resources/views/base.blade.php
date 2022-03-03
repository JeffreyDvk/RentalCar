<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />
    <title>RentalCar</title>
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="/">
                    <span class="align-middle">RentalCar</span>
                </a>
                <ul class="sidebar-nav pt-5">
                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="/">
                            <i class="align-middle" data-feather="sliders"></i>
                            <span class="align-middle">Accueil</span>
                        </a>
                    </li>
                    @auth
                    @if (auth()->user()->is_admin)
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/Statistiques">
                            <i class="align-middle" data-feather="sliders"></i>
                            <span class="align-middle">Statistiques</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/Locations">
                            <i class="align-middle" data-feather="sliders"></i>
                            <span class="align-middle">Locations</span>
                        </a>
                    </li>
                    @endif
                    @endauth
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/Park">
                            <i class="align-middle" data-feather="sliders"></i>
                            <span class="align-middle">Park</span>
                        </a>
                    </li>
                    @auth
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/Profile">
                            <i class="align-middle" data-feather="users"></i>
                            <span class="align-middle">Profile</span>
                        </a>
                    </li>
                    @endauth
                    @guest
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/Connection">
                            <i class="align-middle" data-feather="settings"></i>
                            <span class="align-middle">Se connecter</span>
                        </a>
                    </li>
                    @endguest
                    @auth
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/logout">
                            <i class="align-middle" data-feather="settings"></i>
                            <span class="align-middle">Deconnexion</span>
                        </a>
                    </li>
                    @endauth
                </ul>
            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand justify-content-between navbar-light navbar-bg">
                <a class="sidebar-toggle d-flex"><i class="hamburger align-self-center"></i></a>
                <form class="d-none d-sm-inline-block">
                    <div class="input-group input-group-navbar">
                        <input type="text" class="form-control" placeholder="Search…" aria-label="Search">
                        <button class="btn" type="button"><i class="align-middle" data-feather="search"></i></button>
                    </div>
                </form>
                @auth
                <a class="nav-link dropdown-toggle d-inline-block" href="#" data-toggle="dropdown">
                    <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded mr-1" alt="Charles Hall" />
                    <span class="text-dark">{{ auth()->user()->name }}</span>
                </a>
                @endauth
            </nav>

            <main class="content">
                <div class="container-fluid p-0">
                    @yield('content')
                </div>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-left">
                            <p class="mb-0">
                                COPYRIGHT RENTALCAR 2022
                            </p>
                        </div>
                        <div class="col-6 text-right">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Aide</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">POWERED BY N&J</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="js/main.js"></script>

    

</body>

</html>