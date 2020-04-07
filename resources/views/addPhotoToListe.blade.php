
</head>
<body>


<h1>
    hello, you can below easy download your photos.
</h1>

<form action="{{route('saveOnePhoto')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image">
    <input type="submit" value="send">
</form>

<h3>
    all download photos:
</h3>
<?php
$allPhotos = \App\Photo::all();
?>

    @foreach ($allPhotos as $photo)
            <img src="/storage/{{$photo->name}}" alt="image" width="150px" height="150px" value="{{$photo->id}}">
    @endforeach

<button><a href="{{route('home')}}">go to start page</a></button>


</body>
</html>
