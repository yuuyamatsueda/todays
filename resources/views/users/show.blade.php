@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            {{-- ユーザ情報 --}}
            @include('users.card')
           {!! link_to_route('users.edit', '編集', ['user' => Auth::id()], ['class' => 'btn btn-lg btn-primary']) !!}
        </aside>
        <div class="col-sm-8">
            {{-- タブ --}}
            @include('users.navtabs')
            @if (Auth::id() == $user->id)
                {{-- 投稿フォーム --}}
                @include('todays.form')
            @endif
            {{-- 投稿一覧 --}}
            @include('todays.todays')
        </div>
    </div>
@endsection