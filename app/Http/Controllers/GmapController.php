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
    
    public function store(Request $request, Gmap $gmap)
    {
        // バリデーション
        $request->validate([
            'gmap.name' => 'required|string|max:50',
            'gmap.address' => 'required|string|max:100',
            'gmap.lat' => 'required|string|max:50',
            'gmap.lng' => 'required|string|max:50',
        ]);
        
        // 質問を取得
        $input_gmap = $request['gmap'];
        $input_gmap['lat'] = (float)$input_gmap['lat'];
        $input_gmap['lng'] = (float)$input_gmap['lng'];
        // 質問を保存
        $gmap->fill($input_gmap)->save();
        
        return redirect(route('gmaps.index'));
    }
    
    public function delete(Gmap $gmap)
    {
        $gmap->delete();
        return redirect(route('gmaps.index'));
    }
}
