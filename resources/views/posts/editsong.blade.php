<!DOCTYPE html>  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <title>歌曲</title>  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style type="text/css">
    form{
        margin: 20px;
    }
</style>
<body>
<body background="1c851bd52235ef3474f1071734af2e52.gif"
style=" background-repeat:no-repeat ;
background-size:100% 100%;
background-attachment: fixed;
text-align:center;">
<h2>编辑歌曲</h2>
{!! Form::open(['action' => ['SongsController@update', $song->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('name', 'name')}}
        {{Form::text('name', $song->name, ['class' => 'form-control', 'placeholder' => 'name'])}}
    </div>
    <div class="form-group">
        {{Form::label('picture', 'picture')}}
        {{Form::text('picture', $song->picture, ['class' => 'form-control', 'placeholder' => 'picture'])}}
    </div>
    <div class="form-group">
            {{Form::label('actor', 'actor')}}
            {{Form::text('actor', $song->actor, ['class' => 'form-control', 'placeholder' => 'actor'])}}
        </div>
        <div class="form-group">
            {{Form::label('address', 'address')}}
            {{Form::text('address', $song->address, ['class' => 'form-control', 'placeholder' => 'address'])}}
        </div>
        <div class="form-group">
            {{Form::label('publishtime', 'publishTime')}}
            {{Form::date('publishtime', $song->publishtime, ['class' => 'form-control', 'placeholder' => 'publishTime'])}}
        </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
<a href="/songs" class="btn btn-default">Go Back</a>
</body>  
</html>
