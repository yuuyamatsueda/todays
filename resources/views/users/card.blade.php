<div style="width: 18rem;">
    <div class="body">
        <img class="rounded-circle" src="{{ asset($user->profile_photo) }}" width="200" height="200">
            <div class="text">
                @include('users.profile')
            </div>
    </div>
</div>
