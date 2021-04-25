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
        
        <form action="{{route('Edit',['id'=>$item->id])}}" method="get">
            <button type="submit">Edit</button>
        </form> 
        <form action="{{route('delete',['id'=>$item->id])}}">
                <button type="submit">Delete</button>
        </form>

    @endforeach
       

    
        @foreach ($showAbout as $item)
        <?php
            $imagename= ($item->imgfile);
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

        <form action="{{route('delabout',['id'=>$item->id])}}">
        <button type="submit">Delete</button>
        </form>
        @endforeach
    

        @foreach ($showVisa as $item)
        <?php
            $imagename= ($item->imgfile);
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
        <form action="{{route('edvisa',['id'=>$item->id])}}" method="get">
            <button type="submit">Edit</button>
             </form> 
     
             <form action="{{route('delvisaimage',['id'=>$item->id])}}">
             <button type="submit">Delete</button>
             </form>
        
        @endforeach
       
    {{-- </form> --}}

</body>
</html>