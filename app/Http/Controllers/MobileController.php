<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MobileController extends Controller
{
    public function placeRank()
    {
        $places = DB::table('places')->pluck('name')->toArray();
        $ratings = DB::table('like_dislake_places')->pluck('liki')->toArray();

        $combine = array_combine($places, $ratings);

        return response()->json([
            $combine
        ]);

    }

    public function photoByPlaceId()
    {
        $photos = DB::table('photos')->select('place_id', 'name')->get();

        return response()->json([$photos]);

    }
}
