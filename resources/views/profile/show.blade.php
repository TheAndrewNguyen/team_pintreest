<x-app-layout>

    <div class="mx-auto p-4 sm:p-6 lg:p-8">
        <div style="text-align: center; width: 100%;">
            <p style="font-size: 64px; font-weight: 700;">{{$user->name}}</p>
            <p>{{$user->email}}</p>
            <!-- <p>{{$user->email_verified_at}}</p> -->
        </div>

        <p style="font-size: 36px; text-align: center; width: 100%;"> My posts </p>

        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y flex" style="max-width:100%; flex-wrap:wrap; background-color: #cee8cc; ">
            @include('profile.partials.my-posts')
        </div>
        @if($user->saved)
        <p style="font-size: 36px; text-align: center; width: 100%; margin-top: 32px;"> Saved posts </p>

        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y flex" style="max-width:100%; flex-wrap:wrap; background-color: #cee8cc; ">
            @include('profile.partials.saved-posts')
        </div>
        @endif
    </div>
</x-app-layout>
