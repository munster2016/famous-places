@extends('layouts.master')

@section('title', 'add photo to liste')

@section('name_of_page', 'download your photo')

@section('link', 'add new photo to collection')

@section('content')


<div style="border: 1px solid red;width: 350px; height: 150px; margin: auto; margin-top:50px">
    <form action="{{route('saveOnePhoto')}}" method="post" enctype="multipart/form-data">
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
            <img  src="/storage/{{$photo->name}}" alt="image" width="250px" height="250px" value="{{$photo->id}}">
    @endforeach

<br>
<button><a href="{{route('home')}}">go to start page</a></button>
@endsection


