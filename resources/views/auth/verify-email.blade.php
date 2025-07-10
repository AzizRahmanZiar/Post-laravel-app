<x-layout>
    <h1>Verify your email</h1>

    <p>Did'nt get the email?</p>
    <form action="{{route('verification.send')}}" method="post">
        @csrf
        
        <button>Send again</button>
    </form>
</x-layout>
