<x-layout>
   <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md mx-auto">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Reset your password</h1>

        <form action="{{route('password.update')}}" method="post" class="space-y-4">

            @csrf

        <input type="hidden" name="token" value="{{$token}}">

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
                Reset password
            </button>


        </form>
</x-layout>


