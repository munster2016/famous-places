<?php

namespace App\Http\Controllers;

use App\LikeDislikePlace;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App\Place;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PlaceController extends Controller
{
    /**
     * Show all places
     */
    public function showAllPlaces()
    {
        $places = \App\Place::all();
//        dd($places);
        $replics = \App\LikeDislikePlace::all();

        return view('places', compact('places', 'replics'));
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

        $getId = \App\Place::count();

        \App\LikeDislikePlace::updateOrCreate(

            ['place_id'=> $getId]

            );
//        $replics = \App\LikeDislikePlace::all();

        return redirect('places');
    }

    /**
     * Show place with photos by place's id
     */
    public function showPlaceWithPhotosByPlaceId($id)
    {
        $place = \App\Place::find($id);
        $photos = \App\Place::find($id)->photos;
//dd($photos);
        return view('showPlaceWithPhotosByPlaceId', compact('photos', 'place'));
    }

    /**
     * add photo to place
     */
    public function addPhotoToPlace($id)
    {
        $place = \App\Place::find($id);
        $allPlaces = \App\Place::all();
        return view('formAddPhotoToPlace', compact('allPlaces', 'place'));
    }

    /**
     * save photos with place's id
     */
    public function savePhoto(Request $request)
    {

//       $path =  $request->file('image')->getClientOriginalName();
//        dd($request);
        $file = $request->file('image')->store('images', 'public');

        Photo::create(['place_id' => $request->id, 'name' => $file]);
        $photos = \App\Place::find(1)->photos;

        return redirect('places');
    }

    public function addPhotosToAllPhotos()
    {
        return view('addPhotoToListe');
    }

    public function addLike($placeId)
    {

        LikeDislikePlace::
        where('place_id', $placeId)
            ->increment('liki');

//        $likes = LikeDislikePlace::find($placeId)->like;


        return redirect('places');
    }

    public function addDislike($placeId)
    {
        LikeDislikePlace::
        where('place_id', $placeId)
            ->increment('dislike');

//        $dislikes = LikeDislikePlace::find($placeId)->dislike;

        return redirect('places');
    }

}

