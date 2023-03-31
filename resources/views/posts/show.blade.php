<x-app-layout>
    <div>
        <p style=""> {{$post->title}} </p>
        <p> {{$post->message}} </p>
        <img src="/images/{{$post->image_name}}"></img>
    </div>
</x-app-layout>
