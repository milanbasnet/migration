<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('visaupdate',[id=>$posts->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{$posts->id}}">
       <h3>Visas</h3>
       <div class="editabout">
       <label for="boxnumber">boxnumber</label>
       <input type="integer" name="boxnumber" value="{{$posts->boxnumber}}" placeholder="choose box number 1-6 you want to modfiy">
       <label for="title">title</label>
       <input type="text" name="title" value="{{$posts->title}}">
       <label for="paragraph">content</label>
      <input type="textarea" name="content" id="" cols="30" rows="10" value="{{$posts->content}}"></textarea>
       <label for="image">select image:</label>
       <input type="file" name="image" id="" value="{{$posts->imgfile}}">
       <button type="submit">submit</button>
   </div>
   </form>
</body>
</html>