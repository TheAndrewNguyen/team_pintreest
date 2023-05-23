@foreach ($posts as $post)
    @if ($post->user->is(auth()->user()))
        <div class="p-6 space-x-2" style="display: block; box-sizing: border-box; flex: 0 0 20%; max-width:20%; background-color: #cee8cc; 
    border-width: 1px;
    border-style: solid;
    border-color: #bfdcba;">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
            </svg>
            <div class="flex-1">
                <div class="flex justify-between items-center">
                    <div>
                        <span class="text-gray-800">{{ $post->user->name }}</span>
                        <small class="ml-2 text-sm text-gray-600">{{ $post->created_at->format('j M Y, g:i a') }}</small>
                        @unless ($post->created_at->eq($post->updated_at))
                            <small class="text-sm text-gray-600"> &middot; {{ __('edited') }}</small>
                        @endunless
                    </div>
                </div>
                <a href="/posts/{{$post->id}}">
                    <h1 style="font-size:24px;">{{ $post->title }}</h1>
                    <p class="mt-4 text-lg text-gray-900">{{ $post->message }}</p>
                </a>
                @if($post->image_name)
                    <!-- <p class="mt-4 text-lg text-gray-900">{{ $post->image_name }}</p> -->
                    <img src="./../images/{{$post->image_name}}"></img>
                @endif
            </div>
        </div>
    @endif
@endforeach
