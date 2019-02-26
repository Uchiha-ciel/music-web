<!DOCTYPE html>  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <title>添加歌手</title>  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style type="text/css">
    form{
        margin: 20px;
    }
    h2 {text-align: center;}
    .add {margin-bottom: 20px;text-align: center;}
    .add a {text-decoration: none;color: #fff;background-color: lightseagreen;padding: 6px;border-radius: 5px;}
    td {text-align: center;}
</style>
<body>
<body background="1c851bd52235ef3474f1071734af2e52.gif"
style=" background-repeat:no-repeat ;
background-size:100% 100%;
background-attachment: fixed;
text-align:center;">
<h2>添加歌手</h2>
 {!! Form::open(['action' => 'SingersController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('name', 'name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'name'])}}
    </div>
    <div class="form-group">
        {{Form::label('picture', 'picture')}}
        {{Form::text('picture', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'picture path'])}}
    </div>
    <div class="form-group">
        {{Form::label('fansnum', 'fansnum')}}
        {{Form::text('fansnum', '', ['class' => 'form-control', 'placeholder' => 'fansnum'])}}
    </div>
    <div class="form-group">
        {{Form::label('describe', 'describe')}}
        {{Form::text('describe', '', ['class' => 'form-control', 'placeholder' => 'describe'])}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
<div class="add">
    <a href="/singers" class="btn btn-default">Go Back</a>
</div>
</body>  
</html>
