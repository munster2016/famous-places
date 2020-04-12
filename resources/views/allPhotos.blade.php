@extends('layouts.master')

@section('title', 'all photos')

@section('name_of_page', 'Collection of photos')

@section('link', 'all photos')

@section('content')
<h2>
    all download photos:
</h2>
<?php
$allPhotos = \App\Photo::all();
?>

@foreach ($allPhotos as $photo)
    <img src="/storage/{{$photo->name}}" alt="image" width="250px" height="250px" value="{{$photo->id}}">
@endforeach

<button><a href="{{route('home')}}">go to start page</a></button>

@endsection
