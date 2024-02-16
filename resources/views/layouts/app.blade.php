<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
<link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
<title>@yield('title', 'Online Store')</title>
</head>
<body>
<!-- header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
<div class="container">
<a class="navbar-brand" href="{{ route('home.index') }}">Tienda Online</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<div class="navbar-nav ms-auto">
<a class="nav-link active" href="{{ route('home.index') }}">Inicio</a>
<a class="nav-link active" href="{{ route('product.index') }}">Productos</a>
<a class="nav-link active" href="{{ route('cart.index') }}">Carrito de compras</a>
<a class="nav-link active" href="{{ route('home.about') }}">Acerca de</a>
<div class="vr bg-white mx-2 d-none d-lg-block"></div>
@guest
<a class="nav-link active" href="{{ route('login') }}">Iniciar Sesión</a>
<a class="nav-link active" href="{{ route('register') }}">Registrarse</a>
@else
<a class="nav-link active" href="{{ route('myaccount.orders') }}">Mis órdenes</a>
<form id="logout" action="{{ route('logout') }}" method="POST">
<a role="button" class="nav-link active"
onclick="document.getElementById('logout').submit();">Salir</a>
@csrf
</form>
@endguest
</div>
</div>
</div>
</nav>
<header class="masthead bg-primary text-white text-center py-4">
<div class="container d-flex align-items-center flex-column">
<h2>@yield('subtitle', 'Tienda Online en Laravel')</h2>
</div>
</header>
<!-- header -->
<div class="container my-4">
@yield('content')
</div>
<!-- footer -->
<div class="copyright py-4 text-center text-white">
    <div class="container">
    <small>
    Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
    href="https://www.linkedin.com/in/teresita-mar%C3%ADa-2495ba18b/">
    Teresita</a> 
    </small>
    </div>
    </div>
<!-- footer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
</body>
</html>