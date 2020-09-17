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
<header>
    <h3 class="title">{{ $user->name }}</h3>
    <h3 class="font">{{ $user->born }}</h3>
    <h3 class="font">{{ $user->introduction }}</h3>
</header>
</body>
</html>