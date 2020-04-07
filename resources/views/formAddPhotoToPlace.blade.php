<h3>

   Add new photo to place : {{$place->name}} or choose other place in drop list
</h3>

<form action="{{route('saveOnePhoto')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="places">Place :</label>
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
    <input type="file" name="image">

    <input type="submit" value="send">
</form>

