{{-- <x-layout>
   <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md mx-auto">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Welcome back</h1>

        <form action="{{route('login')}}" method="post" class="space-y-4">
            @csrf

            <!-- Email Field -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input
                    type="text"
                    name="email"
                    value="{{old('email')}}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Enter your email">

                      @error('email')
                       <span class="text-red-500 text-xs "> {{$message}}</span>
                    @enderror
            </div>

            <!-- Password Field -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input
                    type="password"
                    name="password"

                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Enter your password">

                    @error('password')
                       <span class="text-red-500 text-xs "> {{$message}}</span>
                    @enderror
            </div>

            <div>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </div>

               @error('failed')
                       <span class="text-red-500 text-xs "> {{$message}}</span>
                @enderror

            <!-- Submit Button -->
            <button
                type="submit"
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Login
            </button>
        </form>
</x-layout>
 --}}


 <x-layout>
    <div class="bg-white p-8 rounded-xl shadow-sm border border-slate-100 max-w-md mx-auto w-full">
        <div class="text-center mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
            </svg>
            <h1 class="text-2xl font-bold text-slate-800 mt-2">Welcome Back</h1>
        </div>

        <form action="{{ route('login') }}" method="post" class="space-y-5">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-slate-700 mb-2">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="your@email.com"
                       class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                @error('email')
                    <p class="text-rose-500 text-sm mt-1 flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ $message }}</span>
                    </p>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-slate-700 mb-2">Password</label>
                <input type="password" name="password" placeholder="••••••••"
                       class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                @error('password')
                    <p class="text-rose-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-slate-300 rounded">
                    <label for="remember" class="ml-2 text-sm text-slate-700">Remember me</label>
                </div>
            </div>

            <button type="submit" class="w-full bg-indigo-600 text-white py-2.5 rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                </svg>
                <span>Login</span>
            </button>
        </form>
    </div>
</x-layout>
