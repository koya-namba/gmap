<?php

namespace App\Http\Controllers;

use App\Models\Gmap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GmapController extends Controller
{
    public function index(Request $request, Gmap $gmap)
    {
        # スポット一覧画面
        # 中心の選択
        if (isset($request->gmap_id)) {
            $center_data = $gmap->where('id', $request->gmap_id)->first();
        } else {
            $center_data = $gmap->latest()->first();
        }
        return view('gmaps.index', ['gmaps' => $gmap->get(), 'center_data' => $center_data]);
    }
    
    public function store(Request $request, Gmap $gmap)
    {
        // 新規スポットの保存
        // バリデーション
        $request->validate([
            'gmap.name' => 'required|string|max:50',
            'gmap.address' => 'required|string|max:100',
            'gmap.lat' => 'required|string|max:50',
            'gmap.lng' => 'required|string|max:50',
        ]);
        $input_gmap = $request['gmap'];
        // 緯度経度を変換
        $input_gmap['lat'] = (float)$input_gmap['lat'];
        $input_gmap['lng'] = (float)$input_gmap['lng'];
        $gmap->fill($input_gmap)->save();
        return redirect(route('gmaps.index'));
    }
    
    public function delete(Gmap $gmap)
    {
        // スポットの削除
        $gmap->delete();
        return redirect(route('gmaps.index'));
    }
}
