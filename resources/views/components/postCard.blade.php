@props(['post'])

<div class="bg-slate-100 border p-4 rounded-md m-2 shadow-md">
     <h2 class="text-xl text-red-500 font-bold">{{$post->title}}</h2>

     <div class="text-gray-500">
        <span>Posted at {{$post->created_at->diffForHumans()}} by</span>
        <a href="{{route('posts.user', $post->user)}}" class="text-blue-500 font-medium">{{$post->user->username}}</a>
     </div>

     <div>
        <p class="text-sm">{{Str::words($post->body, 15)}}</p>
     </div>
 </div>
