<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GmapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gmaps')->insert([
            'name' => '東京タワー',
            'address' => '東京都港区芝公園4-2-8',
            'lat' => 35.65856,
            'lng' => 139.745461
        ]);
        
        DB::table('gmaps')->insert([
            'name' => 'スカイツリー',
            'address' => '東京都墨田区押上1-1-2',
            'lat' => 35.7100069,
            'lng' => 139.8108103
        ]);
    }
}
