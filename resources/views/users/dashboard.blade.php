<x-layout>
    <h1>Hello {{auth()->user()->username}}</h1>

    <form action="{{route('posts.store')}}" method="post">
        <h2 class="font-bold mb-4">Create new post</h2>



        @if (session('success'))
            <div>
              <x-flashMsg msg="{{session('success')}}"/>
            </div>
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


        <button>create post</button>
    </form>

    <div class="flex flex-col gap-2">
     @foreach ($posts as $post)
     <x-postCard :post="$post"/>
     @endforeach
</div>

<div>{{$posts->links()}}</div>
</x-layout>
