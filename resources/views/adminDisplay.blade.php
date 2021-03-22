<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/about.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @csrf
    @foreach ($showImage as $item)
    <?php
            $imagename= ($item->imageFile);
            ?>
        <div class="col-md-4">
            <h4>{{$item->name}}</h4>
        </div>
        <div class="col-md-4">
            <h4>{{$item->typeImg}}</h4>
        </div>
        <div class="col-md-4">
            <img src="{{asset('images')}}/{{$imagename}}" alt="">
        </div>
        
        <form action="" method="get">
        <button type="submit">Edit</button>
        </form>
        <form action="{{route('dltimage',['id'=>$item->id])}}">
        <button type="submit">Delete</button>
        </form>
    @endforeach
       

    {{-- <form action="" enctype="multipart/form-data">
        @csrf
        @foreach ($showAbout as $item)
        <?php
            $imagename= json_decode($item->imgfile);
        ?>
        <div class="col-md-4">
            <h4>{{$item->title}}</h4>
        </div>
        <div class="col-md-4">
            <h4>{{$item->paragraph}}</h4>
        </div>
        <div class="col-md-4">
            <img src="{{asset('images')}}/{{$imagename}}" alt="">
        </div>

       <form action="{{route('Edit',['id'=>$item->id])}}" method="get">
       <button type="submit">Edit</button>
        </form> 

        <form action="{{route('delete',['id'=>$item->id])}}">
        <button type="submit">Delete</button>
        </form>
        @endforeach
       
    </form>

    <form action="" method="get">
        @csrf
        @foreach ($showVisa as $item)
        <?php
            $imagename= json_decode($item->imgfile);
        ?>
        <div class="col-md-4">
            <h4>{{$item->title}}</h4>
        </div>
        <div class="col-md-4">
            <h4>{{$item->boxnumber}}</h4>
        </div>
        <div class="col-md-4">
            <h4>{{$item->content}}</h4>
        </div>
        <div class="col-md-4">
            <img src="{{asset('images')}}/{{$imagename}}" alt="">
        </div>

        <button type="submit">Edit</button>
        <button type="submit">Delete</button>
        @endforeach
       
    </form> --}}
   

</body>
</html>