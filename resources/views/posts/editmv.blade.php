<!DOCTYPE html>  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <title>MV</title>  
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
<h2>编辑MV</h2>
{!! Form::open(['action' => ['MvsController@update', $mv->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('name', 'name')}}
        {{Form::text('name', $mv->name, ['class' => 'form-control', 'placeholder' => 'name'])}}
    </div>
    <div class="form-group">
        {{Form::label('cover', 'cover')}}
        {{Form::text('cover', $mv->cover, ['class' => 'form-control', 'placeholder' => 'cover'])}}
    </div>
    <div class="form-group">
            {{Form::label('actor', 'actor')}}
            {{Form::text('actor', $mv->actor, ['class' => 'form-control', 'placeholder' => 'actor'])}}
        </div>
        <div class="form-group">
            {{Form::label('address', 'address')}}
            {{Form::text('address', $mv->address, ['class' => 'form-control', 'placeholder' => 'address'])}}
        </div>
        <div class="form-group">
            {{Form::label('publishtime', 'publishTime')}}
            {{Form::date('publishtime', $mv->publishtime, ['class' => 'form-control', 'placeholder' => 'publishTime'])}}
        </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
<a href="/mvs" class="btn btn-default">Go Back</a>
</body>  
</html>
