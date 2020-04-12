@extends('layouts.master')

@section('title', 'add your new place')

@section('name_of_page', 'add your new place')

@section('link', 'create new place')

@section('content')

<div style="border: 1px solid red; height: 250px; width: 500px; margin: auto; margin-top: 25px">
    <form action="{{route('saveOnePlace')}}" method="post">
        @csrf
        <p>add new place</p>
        <p> name :<input type="text" name="name"></p>
        <label for="place">Choose a type :</label>
        <select name="type" id="place">
            <option value="sport">Sport</option>
            <option value="history">History</option>
            <option value="food">Food</option>
        </select>
        <br>
        <input type="submit" value="save">
    </form>
</div>


<button><a href="{{route('home')}}">go to start page</a></button>

@endsection
