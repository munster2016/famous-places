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

