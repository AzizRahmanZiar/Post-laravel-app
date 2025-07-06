{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-900">

    <header class="bg-slate-800 shadow-lg">
        <nav class="flex justify-between px-8 py-5">
         <a href="{{route('posts.index')}}" class="bg-white p-2 rounded-lg  font-bold hover:bg-slate-100">Home</a>

         @auth

       <div class="flex gap-5 items-center justify-center text-white">

        <form action="{{route('logout')}}" method="post">
            @csrf
            <button>Logout</button>
        </form>
        <div>
            <a href="{{route('dashboard')}}">Dashboard</a>
         </div>

        <div class="flex flex-col items-center justify-center">
            <img src="./imgs/Aziz-1.jpg" alt="me" class="h-10 w-10 rounded-full ring-2 hover:ring-white">

            <span>{{auth()->user()->username}}</span>
        </div>


       </div>

         @endauth

         @guest
             <div class="flex items-center gap-4">
            <a href="{{route('login')}}" class="bg-white p-2 rounded-lg  font-bold hover:bg-slate-100">Login</a>

            <a href="{{route('register')}}" class="bg-white p-2 rounded-lg  font-bold hover:bg-slate-100">Sign in</a>
         </div>
         @endguest
        </nav>
    </header>

    <main class="py-8 px-4 mx-auto max-w-screen-lg">
       {{$slot}}
    </main>


</body>
</html> --}}




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col">
    <header class="bg-white shadow-sm">
        <nav class="flex justify-between items-center px-8 py-4 max-w-7xl mx-auto">
            <a href="{{ route('posts.index') }}" class="flex items-center gap-2 text-indigo-600 font-bold hover:text-indigo-800 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="text-lg">Home</span>
            </a>

            @auth
                <div class="flex items-center gap-6">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-1 text-slate-700 hover:text-indigo-600 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                        <span>Dashboard</span>
                    </a>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="flex items-center gap-1 text-slate-700 hover:text-indigo-600 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            <span>Logout</span>
                        </button>
                    </form>
                    <div class="flex items-center gap-2">
                        <img src="./imgs/Aziz-1.jpg" alt="Profile" class="h-8 w-8 rounded-full ring-2 ring-indigo-200">
                        <span class="font-medium text-slate-700">{{ auth()->user()->username }}</span>
                    </div>
                </div>
            @endauth

            @guest
                <div class="flex items-center gap-4">
                    <a href="{{ route('login') }}" class="text-slate-700 hover:text-indigo-600 transition">Login</a>
                    <a href="{{ route('register') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                        </svg>
                        <span>Sign Up</span>
                    </a>
                </div>
            @endguest
        </nav>
    </header>

    <main class="flex-grow py-8 px-4 mx-auto max-w-7xl w-full">
        {{ $slot }}
    </main>
</body>
</html>
