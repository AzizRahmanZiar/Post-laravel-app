<h1>Hello {{$user->username}}</h1>

<div>
    <h2>You have created {{$post->title}}</h2>
    <p>{{$post->body}}</p>
    <img src="{{$message->embed('storage/' . $post->image)}}" alt="coverimage">
</div>


