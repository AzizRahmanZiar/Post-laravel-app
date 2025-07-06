<x-layout>
    <h1 class="text-xl text-red-500">{{$user->username}}'s posts {{$posts->total()}}</h1>

    <div class="flex flex-col gap-2">
     @foreach ($posts as $post)
      <x-postCard :post="$post"/>
     @endforeach
    </div>

    <div>
        {{$posts->links()}}
    </div>

</x-layout>
