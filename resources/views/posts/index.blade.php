<x-layout>
 <h1 class="text-xl font-bold">Latest posts</h1>

<div class="flex flex-col gap-2">
     @foreach ($posts as $post)
      <x-postCard :post="$post"/>
     @endforeach
</div>

<div>
    {{$posts->links()}}
</div>
</x-layout>

