<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layoff Hunter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <header class="sticky-top" style="backdrop-filter: blur(7px); background: rgba(0,0,0,0.3); border-radius: 24px; padding: 0px 25px; top: 10px; margin-bottom: 50px;">
        <nav class="navbar d-flex justify-content-between w-100">
            <a class="navbar-brand" href="{{ route('client.home.index') }}">LAYOFFHunter</a>

            <ul class=" navbar list-unstyled d-flex justify-content-end gap-lg-4" style="margin-bottom: 0px;">
                <li class="nav-item">
                    <a href="{{ route('client.vacancy.index') }}" class="nav-link">see vacancies</a>
                </li>

                <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">

                        @auth
                            {{ Auth::user()->name }}
                        @else
                            profile
                        @endauth
                    </button>
                    <ul class="dropdown-menu">
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ route('account.index') }}"
                                        class="dropdown-item"
                                    >
                                        profile
                                    </a>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                                         onclick="event.preventDefault();
                                                this.closest('form').submit();" class="dropdiiwn">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="dropdown-item"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="dropdown-item"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </ul>
                </div>


            </ul>
        </nav>
    </header>
    @yield('content')

    <footer>
        &copy; layoff hunter {{ now()->year }}
    </footer>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
