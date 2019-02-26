<!DOCTYPE html>  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <title>用户</title>  
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
<h2>编辑用户</h2>
{!! Form::open(['action' => ['CustomersController@update', $customer->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('name', 'name')}}
        {{Form::text('name', $customer->name, ['class' => 'form-control', 'placeholder' => 'name'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'email')}}
        {{Form::text('email', $customer->email, ['class' => 'form-control', 'placeholder' => 'email'])}}
    </div>
    <div class="form-group">
            {{Form::label('password', 'password')}}
            {{Form::text('password', $customer->password, ['class' => 'form-control', 'placeholder' => 'password'])}}
        </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
<a href="/customers" class="btn btn-default">Go Back</a>
</body>  
</html>
