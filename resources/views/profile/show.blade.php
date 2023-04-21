<x-app-layout>

    <div class="mx-auto p-4 sm:p-6 lg:p-8">
            <div>
                <p>{{$user->name}}</p>
                <p>{{$user->email}}</p>
                <p>{{$user->email_verified_at}}</p>
            </div>
        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y flex" style="max-width:100%; flex-wrap:wrap;">
            @include('profile.partials.my-posts')
        </div>
    </div>
</x-app-layout>