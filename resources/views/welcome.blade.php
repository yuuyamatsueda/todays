@extends('layouts.app')

@section('content')
 @if (Auth::check())
       <div class="row">
            <aside class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ Auth::user()->name }}</h3>
                    </div>
                    <div class="card-body">
                    {{-- 認証済みユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                        <img class="rounded img-fluid" src="{{ Gravatar::get(Auth::user()->email, ['size' => 500]) }}" alt="">
                    </div>
                </div>
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
        </div>
    </div>
    @endif
@endsection