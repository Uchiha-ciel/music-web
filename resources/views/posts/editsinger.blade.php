<!DOCTYPE html>  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <title>歌手</title>  
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
<h2>编辑歌手</h2>
{!! Form::open(['action' => ['SingersController@update', $singer->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('name', 'name')}}
        {{Form::text('name', $singer->name, ['class' => 'form-control', 'placeholder' => 'name'])}}
    </div>
    <div class="form-group">
        {{Form::label('picture', 'picture')}}
        {{Form::text('picture', $singer->picture, ['class' => 'form-control', 'placeholder' => 'picture'])}}
    </div>
    <div class="form-group">
            {{Form::label('fansnum', 'fansnum')}}
            {{Form::text('fansnum', $singer->fansnum, ['class' => 'form-control', 'placeholder' => 'fansnum'])}}
        </div>
        <div class="form-group">
            {{Form::label('describe', 'describe')}}
            {{Form::text('describe', $singer->describe, ['class' => 'form-control', 'placeholder' => 'describe'])}}
        </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
<a href="/singers" class="btn btn-default">Go Back</a>
</body>  
</html>
