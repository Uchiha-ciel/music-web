<!DOCTYPE html>  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <title>专辑</title>  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style type="text/css">
    form{
        margin: 20px;
    }
</style>
<style type="text/css">
    .wrapper {width: 1000px;margin: 20px auto;}
    h2 {text-align: center;}
    .add {margin-bottom: 20px;text-align: center;}
    .add a {text-decoration: none;color: #fff;background-color: royalblue;padding: 6px;border-radius: 5px;}
    td {text-align: center;}
</style>
<body>
<body background="1c851bd52235ef3474f1071734af2e52.gif"
style=" background-repeat:no-repeat ;
background-size:100% 100%;
background-attachment: fixed;
text-align:center;">
<h2>编辑专辑</h2>
{!! Form::open(['action' => ['AlbumsController@update', $album->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('name', 'name')}}
        {{Form::text('name', $album->name, ['class' => 'form-control', 'placeholder' => 'name'])}}
    </div>
    <div class="form-group">
        {{Form::label('picture', 'picture')}}
        {{Form::text('picture', $album->picture, ['class' => 'form-control', 'placeholder' => 'picture'])}}
    </div>
    <div class="form-group">
            {{Form::label('publishtime', 'publishtime')}}
            {{Form::date('publishtime', $album->publishtime, ['class' => 'form-control', 'placeholder' => 'publishtime'])}}
        </div>
        <div class="form-group">
            {{Form::label('describe', 'describe')}}
            {{Form::text('describe', $album->describe, ['class' => 'form-control', 'placeholder' => 'describe'])}}
        </div>
        <div class="form-group">
            {{Form::label('songnumber', 'songnumber')}}
            {{Form::text('songnumber', $album->songnumber, ['class' => 'form-control', 'placeholder' => 'songnumber'])}}
        </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
<div class="add">
    <a href="/albums" class="btn btn-default">Go Back</a>
</div>
</body>  
</html>
