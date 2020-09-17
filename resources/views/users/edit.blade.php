@extends('layouts.app')

@section('content')
     
        <div class="offset-md-10 col-sm-5">
                {!! link_to_route('users.show', '戻る', ['user' => Auth::id()], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
            @include('users.change')
            
        
        
    
@endsection