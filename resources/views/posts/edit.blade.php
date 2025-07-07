<x-layout>

    <div>
        <a href="{{route('dashboard')}}" class="block mb-2 text-xs text-blue-500">&larr; Go back to your dashboard</a>
    </div>
      <form action="{{route('posts.update', $post)}}" method="post">
        <h2 class="font-bold mb-4">update post</h2>



        @if (session('success'))

              <x-flashMsg msg="{{session('success')}}"/>

        @elseif (session('delete'))

                <x-flashMsg msg="{{session('delete')}}" class="bg-red-500"/>

        @endif

        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title">Post title</label>
            <input type="text" name="title" value="{{$post->title}}">

            @error('title')
                <p>{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="body">Post body</label>
            <textarea name="body" rows="10">{{$post->body}}</textarea>
              @error('body')
                <p>{{$message}}</p>
            @enderror
        </div>


        <button>update</button>
    </form>

</x-layout>
