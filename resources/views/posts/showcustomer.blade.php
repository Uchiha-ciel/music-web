<!DOCTYPE html>  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <title>用户</title>  
</head>
<style type="text/css">
    .wrapper {width: 1000px;margin: 20px auto;}
    h2 {text-align: center;}
    .add {margin-bottom: 20px;text-align: center;}
    .add a {text-decoration: none;color: #fff;background-color: lightseagreen;padding: 6px;border-radius: 5px;}
    td {text-align: center;}
</style>
<body background="1c851bd52235ef3474f1071734af2e52.gif"
style=" background-repeat:no-repeat ;
background-size:100% 100%;
background-attachment: fixed;
text-align:center">
<style type="text/css">
    form{
        margin: 20px;
    }
</style>
<body>
    <div class="add">
        <a href="/customers" class="btn btn-default">Go Back</a>
    </div>
    <div class="wrapper">
        <table width="960" border="1">
            <tr>
                <th>用户名</th>
                <th>邮箱</th>
                <th>密码</th>
            </tr>

            <?php
                echo "<tr>";
                echo "<td>{$customer->name}</td>";
                echo "<td>{$customer->email}</td>";
                echo "<td>{$customer->password}</td>";
                echo "</tr>";
            ?>
        </table>
    </div>
    <div class="add">
        <a href="/customers/{{$customer->id}}/edit" class="btn btn-default">Edit</a>
    </div>
    {!!Form::open(['action' => ['CustomersController@destroy', $customer->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
</body>
</html>