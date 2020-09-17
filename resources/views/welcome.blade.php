@extends('layouts.app')

@section('content')
 @if (Auth::check())
       @include('users.show')
    @else
    <div class="center">
        <div class="text-center">
            @include('users.new')
                
        </div>
    </div>
    <div class="row text-center">
        {{-- ユーザ登録ページへのリンク --}}
        <div class="offset-md-2 col-md-4">{!! link_to_route('signup.get', '新規登録', [], ['class' => 'btn btn-lg btn-primary']) !!}</div>
        <div class="col-md-4">{!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-lg btn-primary']) !!}</div>    
    </div>    
    @endif
@endsection