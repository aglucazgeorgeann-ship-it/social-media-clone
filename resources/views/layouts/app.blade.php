<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans antialiased">

<nav class="bg-white shadow p-4 mb-6">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <a href="{{ url('/') }}" class="font-bold text-xl text-gray-800">{{ config('app.name', 'Laravel') }}</a>

        <div>
            @auth
                <a href="{{ route('dashboard') }}" class="text-gray-700 mr-4">Dashboard</a>
                <a href="{{ route('posts.index') }}" class="text-gray-700 mr-4">Posts</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="text-gray-700">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-gray-700 mr-4">Login</a>
                <a href="{{ route('register') }}" class="text-gray-700">Register</a>
            @endauth
        </div>
    </div>
</nav>

<div class="min-h-screen max-w-7xl mx-auto px-4">
    @yield('content')
</div>

</body>
</html>
