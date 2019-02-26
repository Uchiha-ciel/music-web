<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>administor</title>
    <link rel="icon" href="9b5ac7e5ba045f94e7c1feab48028763.png" type="image/gif" sizes="16x16" />
</head>
<style type="text/css">
.wrapper {width: 1000px;margin: 20px auto;}
h1 {text-align: center;}
.add {margin-bottom: 40px;text-align: center;}
.add a {text-decoration: none;color: #fff;background-color: lightsalmon;padding: 10px;border-radius: 10px;}
.search {margin-bottom: 40px;text-align: center;}
.search a {text-decoration: none;color: #fff;background-color: limegreen;padding: 10px;border-radius: 10px;}
.searchall {margin-bottom: 40px;text-align: center;}
.searchall a {text-decoration: none;color: #fff;background-color: royalblue;padding: 10px;border-radius: 10px;}
.quit {margin-bottom: 40px;text-align: center;}
.quit a {text-decoration: none;color: #fff;background-color: lightseagreen;padding: 10px;border-radius: 10px;}
td {text-align: center;}
</style>
<body>
<div class="wrapper">
	<div id="header" style="background-color:mediumturquoise; height: 40px;">
    	<h1>管理员模式</h1>
    </div>
    <div id="header" style="background-color:Lightgray; height: 300px;">
    <br/><br/>
	    <div class="search">
            <a href="/customers">用户</a>
            <a href="/singers">歌手</a>
        </div>
        <div class="add">
            <a href="/albums">专辑</a>
            <a href="/songs">歌曲</a>
            <a href="/mvs">MV</a>
        </div>
        <div class="quit">
            <a href="/comments">评论</a>
	    </div>
        <div class="searchall">
            <a href="/">退出管理员模式</a>
	    </div>
	</div>
</div>
    
    <script type="text/javascript">
        function del (id) {
            if (confirm("确定删除吗？")){
                window.location = "action-del.php?id="+id;
            }
        }
    </script>
</body>
</html>