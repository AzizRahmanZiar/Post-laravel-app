@props(['post', 'full' => false])

<div class="bg-slate-100 border p-4 rounded-md m-2 shadow-md">

    <div>
        @if($post->image)
        <img src="{{asset('storage/' . $post->image)}}" alt="postImage">
        @else
        <img src="{{asset('storage/postImages/flag.jpg')}}" alt="postImage">
        @endif
    </div>

     <h2 class="text-xl text-red-500 font-bold">{{$post->title}}</h2>

     <div class="text-gray-500">
        <span>Posted at {{$post->created_at->diffForHumans()}} by</span>
        <a href="{{route('posts.user', $post->user)}}" class="text-blue-500 font-medium">{{$post->user->username}}</a>
     </div>

    @if ($full)
        <div>
            <span class="text-sm">{{$post->body}}</span>
        </div>
    @else
         <div>
        <p class="text-sm">{{Str::words($post->body, 15)}}</p>
        <a href="{{route('posts.show', $post)}}" class="text-blue-500 ml-2">Read more &rarr;</a>
     </div>
    @endif

    <div class="flex items-center justify-end gap-4 mt-6">
        {{$slot}}
    </div>
 </div>


 {{-- @props(['post', 'full' => false])

<article class="bg-white p-5 rounded-xl shadow-sm border border-slate-100 hover:shadow-md transition">
    <h2 class="text-xl font-bold text-indigo-700">{{ $post->title }}</h2>
    <div class="flex items-center gap-2 mt-2 text-slate-500 text-sm">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        <span>Posted {{ $post->created_at->diffForHumans() }} by</span>
        <a href="{{ route('posts.user', $post->user) }}" class="text-indigo-600 hover:text-indigo-800 font-medium">
            {{ $post->user->username }}
        </a>
    </div>

    @if ($full)
         <p class="mt-3 text-slate-700">{{$post->body}}</p>
    @else
    <p class="mt-3 text-slate-700">{{ Str::words($post->body, 15) }}</p>
    <a href="{{route('posts.show', $post)}}" class="text-blue-500 ml-2">Read more &rarr;</a>
    @endif
</article> --}}
