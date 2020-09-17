@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            {{-- ユーザ情報 --}}
            @include('users.card')
        </aside>
        <div class="col-sm-8">
            @if (Auth::id() == $user->id)
            <div class="offset-md-10 col-sm-5">
                {!! link_to_route('users.edit', '編集', ['user' => Auth::id()], ['class' => 'btn btn-lg btn-primary']) !!}
            </div> 
            @endif
            <div class="offset-md-10 col-sm-3">
                @include('user_follow.follow_button')
            </div>    
            {{-- タブ --}}
            @include('users.navtabs')
            {{-- ユーザ一覧 --}}
            @include('users.users')
        </div>
    </div>
@endsection