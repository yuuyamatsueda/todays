<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">

</head>
<body>
{!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                           <img class="rounded-circle" src="{{ asset($user->profile_photo) }}" width="200" height="200">
    	                   <input type="file" id="file" name="file" class="form-control">
    	                </div>
    	                <div class="offset-md-2 col-md-3">
    	                    <div class="onamae"
                                {!! Form::label('name', '名前:') !!}
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            </div>    
                        </div> 
                    </div>
                        <div class="offset-md-3 col-md-6">
                            {!! Form::label('born', '生年月日:') !!}
                            {!! Form::text('born', null, ['class' => 'form-control']) !!}
                            {!! Form::label('introduction', '自己紹介文:') !!}
                            {!! Form::text('introduction', null, ['class' => 'form-control']) !!}
                        </div>    
                </div>
　　　　<div class="offset-md-4 col-md-3">　　　　　
            {!! Form::submit('更新', ['class' => 'btn btn-primary btn-lg btn-block']) !!}
        </div>
            {!! Form::close() !!}
</body>
</html>