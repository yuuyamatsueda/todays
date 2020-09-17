@if (count($todays) > 0)
    <ul class="list-unstyled">
        @foreach ($todays as $today)
            <li class="media mb-3">
               <img class="rounded-circle" src="{{ asset($user->profile_photo) }}" width="50" height="50">
                <div class="media-body">
                    <div>
                        {{-- 投稿の所有者のユーザ詳細ページへのリンク --}}
                        {!! link_to_route('users.show', $today->user->name, ['user' => $today->user->id]) !!}
                        <span class="text-muted">投稿日時 {{ $today->created_at }}</span>
                    </div>
                        <div class="card">
                            {{-- 投稿内容 --}}
                            <p class="mb-0">{!! nl2br(e($today->content)) !!}</p>
                        </div>
                        <div class="row">
                            @if (Auth::id() == $today->user_id)
                                {{-- 投稿削除ボタンのフォーム --}}
                                {!! Form::open(['route' => ['todays.destroy', $today->id], 'method' => 'delete']) !!}
                                {!! Form::submit('削除', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                            @endif
                             @include('user_favorite.favorite_button')
                             
                        </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $todays->links() }}
@endif