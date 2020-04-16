@extends('layouts.master')

@section('title', 'add photo to your place')

@section('name_of_page', 'add photo to your place')

{{--@section('link', 'add new photo to place')--}}

@section('content')

    <h2>@lang('messages.add_photo_to_your_place')</h2>

 <div style="border: 1px solid red; height: 250px; width: 600px; margin: auto; margin-top: 25px">

    <form action="{{route('saveOnePhoto')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h3>
            @lang ('messages.Add_new_photo_to') <span style="color: blue">{{$place->name}}</span> @lang ('messages.or_choose_other_place_in_drop_list')
        </h3>
        <label for="places">@lang('messages.Place') :</label>
        <select name="id" id="places">
                @foreach($allPlaces as $item)
                    @if($place->name === $item->name)
                    <option value="{{$place->id}}" selected = "selected">{{$place->name}}</option>
                @else
                    <option value="{{$item->id}}" >{{$item->name}}</option>
                @endif
                @endforeach

        </select>
    {{--    <input type="hidden" name="id" value="{{$item->id}}">--}}
        <input type="file" name="image"><br><br><br>

        <input type="submit" value="send">
    </form>
</div>
@endsection
