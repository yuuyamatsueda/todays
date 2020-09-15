@extends('layouts.app')

@section('content')
 @if (Auth::check())
       <div class="row">
            <aside class="col-sm-4">
                {{-- ユーザ情報 --}}
                @include('users.card')
            </aside>
            <div class="col-sm-8">
                {{-- 投稿フォーム --}}
                @include('todays.form')
                {{-- 投稿一覧 --}}
                @include('todays.todays')
            </div>
        </div>
    @else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Todays</h1>
             {{-- ユーザ登録ページへのリンク --}}
            {!! link_to_route('signup.get', '新規登録', [], ['class' => 'btn btn-lg btn-primary']) !!}
            {!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
    @endif
@endsection