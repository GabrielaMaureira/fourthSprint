<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://kit.fontawesome.com/8ca7133f11.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">

<!--header-->
    <header class="bg-gray-900 text-white">
       
        <div class="flex flex-row items-center max-w-7xl mx-auto px-4">
            <div class="logo flex-1">
                <a href="/" >  
                <img src="{{ asset('storage/images/logo.png') }}" alt="app logo" style="max-height: 200px">
                </a>
            </div>

            <nav class="flex flex-col justify-between items-center sm:flex-row sm:items-center" >
                    
                    
                    <ul class="flex space-x-4 sm:ml-4 sm:flex sm:items-center">
                        
                        <li><a href="{{ route('teams.index') }}" class="text-lg font-bold hover:text-gray-400">Teams</a></li>
                        <li><a href="{{ route('matches.index') }}" class="text-lg font-bold hover:text-gray-400">Matches</a></li>
                        @auth
                        <form action="{{ route('logout') }}" method="POST" class="text-lg font-bold hover:text-gray-400" >
                                @csrf
                                <button type="submit" class="text-white hover:text-gray-400">Logout</button>
                        </form>
                        @endauth
                        
                    </ul> 
            </nav>
        </div>
    </header>
<!--main-->
    <main class="bg-gray-200">
        <div class="mx-auto max-w-screen-lg px-4 sm:px-6 lg:px-8 py-4">
                @yield('content')
            </div>
    </main>
<!--footer-->
    <footer class="bg-gray-900 text-white py-4 ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center">&copy; {{ date('Y') }} Soccer Management. All rights reserved.</p>
        </div>
    </footer>
    
</body>
</html>

