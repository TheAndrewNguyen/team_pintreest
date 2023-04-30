<x-app-layout>
    <div>
        <p style=""> {{$post->title}} </p>
        <p> {{$post->message}} </p>
        <img src="/images/{{$post->image_name}}"></img>
        <a class="btn btn-sm" href="/profile/save_post/{{$post->id}}">Save</a>
    </div>
</x-app-layout>
