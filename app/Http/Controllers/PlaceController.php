<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App\Place;
use Illuminate\Support\Facades\Storage;

class PlaceController extends Controller
{
    /**
     * Show all places
     */
    public function showAllPlaces()
    {
        $places = \App\Place::all();
        return view('places', compact('places'));
    }

    /**
     * Add new place to list
     */
    public function addNewPlace()
    {
        return view('formAddPlace1');
    }

    /**
     * Save new place with type to list
     */
    public function savePlace(Request $request)
    {
        \App\Place::create($request->all());

        return redirect('places');
    }

    /**
     * Show place with photos by place's id
     */
    public function showPlaceWithPhotosByPlaceId($id)
    {
        $place = \App\Place::find($id);
//        dd($place);
        return view('showPlaceWithPhotosByPlaceId', compact('place'));
    }

    /**
     * add photo to place
     */
    public function addPhotoToPlace($id)
    {
        $place = \App\Place::find($id);
        $allPlaces = \App\Place::all();
//        dd($places);
        return view('formAddPhotoToPlace', compact('allPlaces','place'));
    }

    /**
     * save photos with place's id
     */
    public function savePhoto(Request $request)
    {
//        dd($request);

       $path =  $request->file('image')->getClientOriginalName();

       $request->file('image')->storeAs('images', $path);
//dd($path);
        Photo::create(['photo_id'=>$request->id, 'name' => $path]);
//        $places = \App\Photo::find(5)->photos;
//        dd($places);

    return redirect('places');
    }
}
