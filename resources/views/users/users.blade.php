@if (count($users) > 0)
    <ul class="list-unstyled">
        @foreach ($users as $user)
            <li class="media">
                <img class="rounded-circle" src="{{ asset($user->profile_photo) }}" width="50" height="50">
                <div class="media-body">
                    <div>
                        {{ $user->name }}
                    </div>
                    <div>
                        {{-- ユーザ詳細ページへのリンク --}}
                        <p>{!! link_to_route('users.show', 'ちょこっと覗きに行く', ['user' => $user->id]) !!}</p>
                        <div class="offset-md-10 col-sm-2">
                            @include('user_follow.follow_button')
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $users->links() }}
@endif