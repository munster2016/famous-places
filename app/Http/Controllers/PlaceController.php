<?php

namespace App\Http\Controllers;

use App\LikeDislakePhoto;
use App\LikeDislakePlace;
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
        $replicsForPlace = \App\LikeDislakePlace::all();


        return view('places', compact('places', 'replicsForPlace'));
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

        \App\LikeDislakePlace::updateOrCreate(
            ['place_id'=> $getId]);

        \App\LikeDislakePhoto::updateOrCreate(
            ['place_id'=> $getId]

        );
//        $replics = \App\LikeDislikePlace::all();

        return redirect('places')->with(
            'status', 'you added new place!'
        );
    }

    /**
     * Show place with photos by place's id
     */
    public function showPlaceWithPhotosByPlaceId($id)
    {
        $place = \App\Place::find($id);
        $photos = \App\Place::find($id)->photos;
//dd($photos);
        $replicsForPhotos = LikeDislakePhoto::find($id);
        //dd($replicsForPhotos);
        return view('showPlaceWithPhotosByPlaceId', compact('photos', 'place', 'replicsForPhotos'));
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
    public function savePhotoByPlaceId(Request $request)
    {

//       $path =  $request->file('image')->getClientOriginalName();
        //dd($request);
        $file = $request->file('image')->store('images', 'public');

        Photo::create(['place_id' => $request->id, 'name' => $file]);

        return redirect('places');
    }

    public function addPhotosToAllPhotos()
    {
        return view('addPhotoToListe');
    }

    public function addLike($placeId)
    {

        LikeDislakePlace::
        where('place_id', $placeId)
            ->increment('liki');

//        $likes = LikeDislikePlace::find($placeId)->like;


        return redirect('places');
    }

    public function addDislike($placeId)
    {
        LikeDislakePlace::
        where('place_id', $placeId)
            ->increment('dislike');

//        $dislikes = LikeDislikePlace::find($placeId)->dislike;



        return redirect('places');
    }

    public function addLikeForPhotos($placeId)
    {

        LikeDislakePhoto::where('place_id', $placeId)
            ->increment('liki');

        return redirect('places');

    }

    public function addDislikeForPhotos($placeId)
    {

        LikeDislakePhoto::where('place_id', $placeId)
            ->increment('dislike');

        return redirect('places');

    }

}

