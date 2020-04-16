@extends('layouts.master')

@section('title', 'add photo to liste')

@section('name_of_page', 'download your photo')

@section('link', 'add new photo to collection')

@section('content')


<div style="border: 1px solid red;width: 350px; height: 150px; margin: auto; margin-top:50px">
    <form action="{{route('photos.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <p> you can below easy download your photos.</p>
        <input type="file" name="image"><br>
        <input type="submit" value="send">
    </form>
</div>
<h2>
    all download photos:
</h2>
<?php
$allPhotos = \App\Photo::all();
?>

    @foreach ($allPhotos as $photo)
        <div style="border: 5px solid green; display: inline-block">
            <form action="{{route('photos.destroy',$photo->id)}}" method="POST">
                {{ method_field('DELETE') }}
                @csrf
                <img src="/storage/{{$photo->name}}" alt="image" width="250px" height="250px" value="{{$photo->id}}">
                <button type="submit">
                    <img src="data:image/jpeg;base64,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"
                         alt="" width="20px" height="20px" title="delete">
                </button>
            </form>
        </div>
{{--            <img  src="/storage/{{$photo->name}}" alt="image" width="250px" height="250px" value="{{$photo->id}}">--}}
    @endforeach

<br>
<button><a href="{{route('home')}}">go to start page</a></button>
@endsection


