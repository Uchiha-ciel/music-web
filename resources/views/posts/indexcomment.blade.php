<!DOCTYPE html>  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <title>评论</title>  
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
<body>
  <h1>Comments</h1>
  @if(count($comments) > 0)
      @foreach($comments as $comment)
          <div class="well">
              <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h3><a href="/comments/{{$comment->id}}">{{$comment->comment}}</a></h3>
                </div>
              </div>
          </div>
      @endforeach
      {{$comments->links()}}
  @else
      <p>No posts found</p>
  @endif
  <div class="add">
      <a href="/administor">Go Back</a>
  </div>
</body>
</html>