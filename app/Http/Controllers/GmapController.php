<?php

namespace App\Http\Controllers;

use App\Models\Gmap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GmapController extends Controller
{
    public function index(Gmap $gmap)
    {
        return view('gmaps.index', ['gmaps' => $gmap->get()]);
    }
}
