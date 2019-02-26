<!DOCTYPE html>  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <title>专辑</title>  
</head>
<style type="text/css">
    .wrapper {width: 1000px;margin: 20px auto;}
    h2 {text-align: center;}
    .add {margin-bottom: 20px;text-align: center;}
    .add a {text-decoration: none;color: #fff;background-color: royalblue;padding: 6px;border-radius: 5px;}
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
        <a href="/albums">Go Back</a>
    </div>
    <div class="wrapper">
        <table width="960" border="1">
                <tr>
                    <th>专辑名</th>
                    <th>专辑封面</th>
                    <th>发行时间</th>
                    <th>描述</th>
                    <th>收录歌曲数</th>
                </tr>

                <?php
                    echo "<tr>";
                    echo "<td>{$album->name}</td>";
                    echo "<td>{$album->picture}</td>";
                    echo "<td>{$album->publishtime}</td>";
                    echo "<td>{$album->describe}</td>";
                    echo "<td>{$album->songnumber}</td>";
                    echo "</tr>";
                ?>
        </table>
    </div>
    <div class="add">
        <a href="/albums/{{$album->id}}/edit" class="add">Edit</a>
    </div>
    {!!Form::open(['action' => ['AlbumsController@destroy', $album->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
</body>
</html>