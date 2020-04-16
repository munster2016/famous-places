<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TurnLocaleController extends Controller
{
    public function changeLang($locale)
    {
        Session::put('locale', $locale);
        return redirect()->back();
    }
}
