{{-- <x-layout>
    <h1 class="text-xl text-red-500">{{$user->username}}'s posts {{$posts->total()}}</h1>

    <div class="flex flex-col gap-2">
     @foreach ($posts as $post)
      <x-postCard :post="$post"/>
     @endforeach
    </div>

    <div>
        {{$posts->links()}}
    </div>

</x-layout> --}}


<x-layout>
    <div class="space-y-8">
        <div class="flex items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            <h1 class="text-2xl font-bold text-slate-800">{{ $user->username }}'s Posts <span class="text-indigo-600">({{ $posts->total() }})</span></h1>
        </div>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($posts as $post)
                <x-postCard :post="$post" />
            @endforeach
        </div>

        <div class="mt-8">
            {{ $posts->links() }}
        </div>
    </div>
</x-layout>
