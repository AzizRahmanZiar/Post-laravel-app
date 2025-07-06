{{-- <x-layout>
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
 --}}

 <!-- index.blade.php -->
<x-layout>
    <div class="space-y-8">
        <div class="flex items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
            </svg>
            <h1 class="text-2xl font-bold text-slate-800">Latest Posts</h1>
        </div>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($posts as $post)
                <x-postCard :post="$post"/>
            @endforeach
        </div>

        <div class="mt-8">
            {{$posts->links()}}
        </div>
    </div>
</x-layout>
