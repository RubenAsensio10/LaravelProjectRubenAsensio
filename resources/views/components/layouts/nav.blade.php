<nav class="bg-nav h-nav flex flex-row justify-start items-center space-x-2">
    <a href="{{ route('main') }}" class="btn btn-active btn-primary ml-2 rounded-lg">Inicio</a>
    <a href="{{ route('about') }}" class="btn btn-active btn-primary rounded-lg">About</a>
    <button class="btn btn-active btn-warning rounded-lg">Contacta</button>
    <button class="btn btn-active btn-primary rounded-lg">Noticias</button>
    <button class="btn btn-active btn-warning rounded-lg">Referencias</button>
    @auth
        <a href="{{ route('dashboard') }}" class="btn btn-active btn-success rounded-lg">Dashboard</a>
        <button class="btn btn-active btn-info rounded-lg">Enviar mensaje</button>
    @endauth
</nav>