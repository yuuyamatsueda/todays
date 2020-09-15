@extends('layouts.app')

@section('content')
     <div class="row">
        <div class="col-6">
            {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}

                <div class="form-group">
                    {!! Form::label('name', '名前:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    {!! Form::label('born', '生年月日:') !!}
                    {!! Form::text('born', null, ['class' => 'form-control']) !!}
                    {!! Form::label('introduction', '自己紹介文:') !!}
                    {!! Form::text('introduction', null, ['class' => 'form-control']) !!}
                    <div class="card-body">
	                   <input type="file" id="file" name="file" class="form-control">
	               </div>
                </div>
　　　　　　　　　
                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
            
        </div>
        
    </div>
@endsection