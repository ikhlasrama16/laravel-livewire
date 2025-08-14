<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ">
            <x-nav-link :active="request()->routeIs('home')" href="/">Home</x-nav-link>
            <x-nav-link :active="request()->routeIs('timeline')" href="{{ route('timeline') }}">Timeline</x-nav-link>
            <x-nav-link :active="request()->routeIs('users.index')" href="{{ route('users.index') }}">Users</x-nav-link>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            @auth
                <form class="mb-4" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="nav-link">Logout</button>
                </form>
            @else
                <x-nav-link href="{{ route('login') }}">Login</x-nav-link>
            @endauth
        </ul>
    </div>
</nav>
