<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App\Place;
class PlaceController extends Controller
{
    public function showAllPlaces()
    {
        $places = \App\Place::all();
        return view('places', compact('places'));
    }

    public function addNewPlace()
    {
        return view('formAddPlace');
    }

    public function savePlace(Request $request)
    {
        \App\Place::create($request->all());

        return redirect('places');
    }

    public function showPlaceById($id)
    {
        $place = \App\Place::find($id);
        dd($place);
    }

    public function addPhotoToPlace($id)
    {
        $place = \App\Place::find($id);
        $allPlaces = \App\Place::all();
//        dd($places);
        return view('formAddPhotoToPlace', compact('allPlaces','place'));
    }

    public function savePhoto(Request $request)
    {
        dd($request);
        Photo::$request->store('image');
    }
}
