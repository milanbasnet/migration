<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('adminadd')}}" method="post" enctype="multipart/form-data">
        @csrf

        <h1>Admin Uplaod Images</h1>
        <div>
        <label for="name">Name</label>
        <input type="text" placeholder="enter image name" name="name">
        </div>
        <div>
        <label for="type">type</label>
        <input type="text" placeholder="enter image type" name="type">
        </div>
        <div>
            <label for="image">Select image:</label>
            <input type="file" name="image" id="image">
        </div>
        <button type="submit">upload</button>
    </form>

     <form action="{{route('aboutEdit')}}" method="post" enctype="multipart/form-data">
         @csrf
        <h3>About</h3>
        <div class="editabout">
        <label for="title">title</label>
        <input type="text" name="title" value="">
        <label for="paragraph">content</label>
       <textarea name="paragraph" id="" cols="30" rows="10"></textarea>
        <label for="image">select image:</label>
        <input type="file" name="image" id="">
        <button type="submit">submit</button>
    </div>
    </form>

     <form action="{{route('editVisa')}}" method="post" enctype="multipart/form-data">
         @csrf
        <h3>Visas</h3>
        <div class="editabout">
        <label for="boxnumber">boxnumber</label>
        <input type="integer" name="boxnumber" value="" placeholder="choose box number 1-6 you want to modfiy">
        <label for="title">title</label>
        <input type="text" name="title" value="">
        <label for="paragraph">content</label>
       <textarea name="content" id="" cols="30" rows="10"></textarea>
        <label for="image">select image:</label>
        <input type="file" name="image" id="">
        <button type="submit">submit</button>
    </div>
    </form>

    <form action="" method="get">
        @csrf
        <div class="container">
            @foreach ($msg as $post)            
            <h3>User Messages</h3>
            <label for="message">Message</label>
            <p>{{$post->message}}</p>

            {{-- <label for="email">Email</label>
            <p>llgsldghalsdgalsdkgagfdkjhgjasd</p> --}}
            {{-- <button type="submit">Edit</button> --}}
            <button type="submit">Delete</button>
        </div>
        @endforeach

    </form>
</body>
</html>