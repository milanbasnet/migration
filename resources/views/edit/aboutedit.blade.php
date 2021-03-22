<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('update',['id'=>$posts->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{$posts->id}}">
       <h3>About</h3>
       <div class="editabout">
       <label for="title">title</label>
       <input type="text" name="title" value="{{$posts->title}}">
       <label for="paragraph">content</label>
      <textarea name="paragraph" type="text" value="{{$posts->paragraph}}"></textarea>
       <label for="image">select image:</label>
       <input type="file" name="image" src="{{asset('images')}}{{$posts->imgfile}}" id="">
       <button type="submit">submit</button>
   </div>
   </form>
</body>
</html>