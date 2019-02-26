<!DOCTYPE html>  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <title>歌手</title>  
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
  <h1>Singers</h1>
  @if(count($singers) > 0)
      @foreach($singers as $singer)
          <div class="well">
              <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h3><a href="/singers/{{$singer->id}}">{{$singer->name}}</a></h3>
                </div>
              </div>
          </div>
      @endforeach
      {{$singers->links()}}
  @else
      <p>No posts found</p>
  @endif
  <div class="add">
      <a href="/administor">Go Back</a>
  </div>
</body>
</html>