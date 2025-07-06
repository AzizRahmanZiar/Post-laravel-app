{{-- <x-layout>
   <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md mx-auto">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Create an Account</h1>

        <form action="{{route('register')}}" method="post" class="space-y-4">

            @csrf
            <!-- Username Field -->
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                <input
                    type="text"
                    name="username"
                    value="{{old('username')}}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 "
                    placeholder="Enter username">

                    @error('username')
                       <span class="text-red-500 text-xs "> {{$message}}</span>
                    @enderror
            </div>

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

            <!-- Confirm Password Field -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                <input
                    type="password"

                    name="password_confirmation"

                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Confirm your password">
            </div>

            <!-- Submit Button -->
            <button
                type="submit"
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Register
            </button>


        </form>
</x-layout>


 --}}


 <x-layout>
    <div class="bg-white p-8 rounded-xl shadow-sm border border-slate-100 max-w-md mx-auto w-full">
        <div class="text-center mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
            </svg>
            <h1 class="text-2xl font-bold text-slate-800 mt-2">Create an Account</h1>
        </div>

        <form action="{{ route('register') }}" method="post" class="space-y-5">
            @csrf

            <div>
                <label for="username" class="block text-sm font-medium text-slate-700 mb-2 flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span>Username</span>
                </label>
                <input type="text" name="username" value="{{ old('username') }}" placeholder="johndoe"
                       class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                @error('username')
                    <p class="text-rose-500 text-sm mt-1 flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ $message }}</span>
                    </p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-slate-700 mb-2">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="your@email.com"
                       class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                @error('email')
                    <p class="text-rose-500 text-sm mt-1">{{ $message }}</p>
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

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-slate-700 mb-2">Confirm Password</label>
                <input type="password" name="password_confirmation" placeholder="••••••••"
                       class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <button type="submit" class="w-full bg-indigo-600 text-white py-2.5 rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
                <span>Register</span>
            </button>
        </form>
    </div>
</x-layout>
