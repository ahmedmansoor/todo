<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo App</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen bg-gray-50">
    <nav class="bg-white p-6">
        <div class="container mx-auto">
            <div class="flex justify-center">
                <div class="font-semibold text-2xl">Todo App</div>
            </div>
        </div>
    </nav>

    <main class="py-4 flex-grow">
        <div class="container mx-auto">
            @yield('content')
        </div>
    </main>
    <footer class="bg-gray-50 px-6 mt-auto text-gray-500 text-sm">
        <div class="container mx-auto">
            <li class="flex w-full flex-row justify-between">
                @if(auth()->user())
                <a href="#">
                    {{ Auth::user()->name }}
                </a>
                @endif

                <div>
                    <a href="{{ route('logout') }}"  class="p-1 px-2 rounded-md bg-gray-200"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </div>
    </footer>
</body>
</html>
