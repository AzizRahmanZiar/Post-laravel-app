{{-- @props(['msg'])

<p class="text-sm font-medium text-white bg-green-500 px-3 3 py-2 rounded-md">{{$msg}}</p> --}}
@props(['msg'])

<div class="bg-emerald-500 text-white px-4 py-3 rounded-lg mb-6 flex items-center gap-2">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
    <span>{{ $msg }}</span>
</div>
