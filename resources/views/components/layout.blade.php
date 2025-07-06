<!DOCTYPE html>
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
</html>
