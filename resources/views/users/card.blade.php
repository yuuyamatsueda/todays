<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $user->name }}</h3>
        <h3 class="card-title">{{ $user->born }}</h3>
        <h3 class="card-title">{{ $user->introduction }}</h3>
    </div>
    <div class="card-body">
        <img src="{{ asset($user->profile_photo) }}">
    </div>
</div>
{{-- フォロー／アンフォローボタン --}}
@include('user_follow.follow_button')