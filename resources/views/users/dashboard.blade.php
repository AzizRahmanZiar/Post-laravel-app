<x-layout>
    <h1>Welcome {{auth()->user()->username}}, you have {{$posts->total()}} posts</h1>

    <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
        <h2 class="font-bold mb-4">Create new post</h2>

        @if (session('success'))

              <x-flashMsg msg="{{session('success')}}"/>

        @elseif (session('delete'))

                <x-flashMsg msg="{{session('delete')}}" class="bg-red-500"/>
        @endif

        @csrf

        <div class="mb-4">
            <label for="title">Post title</label>
            <input type="text" name="title" value="{{old('title')}}">

            @error('title')
                <p>{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="body">Post body</label>
            <textarea name="body" rows="10">{{old('body')}}</textarea>
              @error('body')
                <p>{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="image">Cover photo</label>
            <input type="file" name="image" id="image">
            @error('image')
                <p>{{$message}}</p>
            @enderror
        </div>


        <button>create post</button>
    </form>

    <div class="flex flex-col gap-2">
     @foreach ($posts as $post)
     <x-postCard :post="$post">
        <a href="{{route('posts.edit', $post)}}" class="bg-green-500 text-white px-2 py-1 text-xs rounded-md">Update</a>
     <form action="
     {{route('posts.destroy', $post)}}" method="post">
    @csrf
    @method('DELETE')
        <button class="bg-red-500 text-white px-2 py-1 text-xs rounded-md">Delete</button>
    </form>
     </x-postCard>
     @endforeach
    </div>

<div>{{$posts->links()}}</div>
</x-layout>



{{-- <x-layout>
    <div class="space-y-8">
        <div class="flex items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
            </svg>
            <h1 class="text-2xl font-bold text-slate-800">Hello, {{ auth()->user()->username }}</h1>
        </div>

        <!-- Create Post Form -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100">
            <div class="flex items-center gap-2 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
                <h2 class="text-xl font-bold text-slate-800">Create New Post</h2>
            </div>

            @if (session('success'))
                <x-flashMsg msg="{{ session('success') }}" />
            @endif

            <form action="{{ route('posts.store') }}" method="post" class="space-y-5">
                @csrf

                <div>
                    <label for="title" class="block text-sm font-medium text-slate-700 mb-2">Title</label>
                    <input type="text" name="title" value="{{ old('title') }}"
                           class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                           placeholder="Post title">
                    @error('title')
                        <p class="text-rose-500 text-sm mt-1 flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>{{ $message }}</span>
                        </p>
                    @enderror
                </div>

                <div>
                    <label for="body" class="block text-sm font-medium text-slate-700 mb-2">Content</label>
                    <textarea name="body" rows="6"
                              class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                              placeholder="Write your post...">{{ old('body') }}</textarea>
                    @error('body')
                        <p class="text-rose-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-indigo-600 text-white px-5 py-2.5 rounded-lg hover:bg-indigo-700 transition flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span>Publish Post</span>
                </button>
            </form>
        </div>

        <!-- User's Posts -->
        <div class="space-y-4">
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                </svg>
                <h2 class="text-xl font-bold text-slate-800">Your Posts</h2>
            </div>

            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($posts as $post)
                    <x-postCard :post="$post" />
                @endforeach
            </div>

            <div class="mt-4">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-layout> --}}
