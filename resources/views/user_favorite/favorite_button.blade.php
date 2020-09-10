@if (Auth::user()->is_favoriting($today->id))
        {{-- アンフォローボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.unfavorite', $today->id], 'method' => 'delete']) !!}
            {!! Form::submit('はずす', ['class' => "btn btn-danger btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {{-- フォローボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.favorite', $today->id]]) !!}
            {!! Form::submit('いいね', ['class' => "btn btn-primary btn-sm"]) !!}
        {!! Form::close() !!}
    @endif