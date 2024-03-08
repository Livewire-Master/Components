<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? '.::Components::.' }}</title>
</head>
<body>
<header>
    <p>
        Traditional Layout
    </p>
    <nav>
        <ul>
            <li>
                <a href="{{ route('page.clocks') }}">
                    Clocks
                </a>
            </li>
            <li>
                <a href="{{ route('page.posts') }}">
                    Posts
                </a>
            </li>
            <li>
                <a href="{{ route('page.todo') }}">
                    Todo
                </a>
            </li>
            <li>
                <a href="{{ route('page.welcome', ['email' => 'hi@armin.expert']) }}">
                    Welcome Armin
                </a>
            </li>

            <li>
                <a href="{{ route('page.user-profile', ['user' => '1']) }}">
                    User Profile
                </a>
            </li>
        </ul>
    </nav>
    <hr>
</header>

@yield('content')

<div id="app">
    @yield('app')
</div>

</body>
</html>
