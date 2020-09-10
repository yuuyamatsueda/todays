@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            {{-- ユーザ情報 --}}
            @include('users.card')
            {!! Form::submit('編集', ['class' => "btn btn-primary btn-sm"]) !!}
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