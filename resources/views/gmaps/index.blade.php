<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            
            * {
                margin: 0;
                padding: 0;
            }
            
            .app {
                width: 100vw;
                height: 100vh;
                display: flex;
                flex-direction: column;
            }
            
            .header {
                height: 100px;
                padding: 0.5em 1em;
            
                box-sizing: border-box;
            
            }
            
            .main {
                padding: 0.5em 1em;
                display: flex;
                flex-direction: row;
                flex-grow: 1;
            }
            
            .sidebar {
                width: 25%;
                padding: 0.5em 1em;
                background-color: whitesmoke;
                box-sizing: border-box;
            }
            
            .content {
                padding: 0.5em 1em;
                display: flex;
                flex-direction: column;
                flex-grow: 1;
            }
            
            .flex-content {
                flex-grow: 1;
                padding: 0.5em 1em;
                box-sizing: border-box;
            }
            
            .fixed-content {
                height: 600px;
                padding: 0.5em 1em;
                background-color: whitesmoke;
                box-sizing: border-box;
            }
            
            .form {
                width: 20%;
                padding: 0.5em 1em;
                background-color: whitesmoke;
                box-sizing: border-box;
            }
            
            .box8 {
                padding: 0.5em 1em;
                margin: 2em 0;
                color: #232323;
                background: #fff8e8;
                border-left: solid 10px #ffc06e;
            }
            
            .box8 p {
                margin: 0; 
                padding: 0;
            }
            
            .sample_box10 {
                padding: 1em 1.5em;
                margin: 2em 0;
                background: linear-gradient(to bottom, #ffffff, #eeeeee);/*背景色*/
                background: -webkit-linear-gradient(top, #fffff, #eeeeee);/*背景色*/
                border: 1px solid #eeeeee;/*枠線*/
                border-top: 4px solid #00008b;/*上の線*/
                box-shadow: 0 -1px 0 rgba(255, 255, 255, 1) inset;
                color:#000000;/*文字色*/
            }
            
            .sample_box10 p {
                margin: 0; 
                padding: 0;
            }
            
            .btn1 {
                margin: 0.5em 0;
                font-weight: 700;
                line-height: 1.5;
                position: relative;
                display: inline-block;
                padding: 0.5rem 1rem;
                cursor: pointer;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                -webkit-transition: all 0.3s;
                transition: all 0.3s;
                text-align: center;
                vertical-align: middle;
                text-decoration: none;
                letter-spacing: 0.1em;
                color: #212529;
                border-radius: 0.5rem;
            }
            
            .btn1-border {
              border: 2px solid #000;
              border-radius: 0;
              background: #fff;
            }
            
            .btn1-border:hover {
              color: #fff;
              background: #000;
            }
            
        </style>
    </head>
    <body>
        <div class="app">
            <div class="header">
                <h1>行きたいスポット</h1>
            </div>
            <div class="main">
                <div class="sidebar">
                    <h2>スポット一覧</h2>
                    @foreach($gmaps as $gmap)
                        <div class="box8">
                            <a href="{{ route('gmaps.index', ['gmap_id' => $gmap->id]) }}">
                                <p>{{ $gmap->name }}</p>
                            </a>
                            <p>{{ $gmap->address }}</p>
                            <p>{{ $gmap->lat }}</p>
                            <p>{{ $gmap->lng }}</p>
                            <form action="{{ route('gmaps.delete', $gmap) }}" id="form_{{ $gmap->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="deleteGmap({{ $gmap->id }})">削除</button>
                            </form>
                        </div>
                    @endforeach
                </div>
                <div class="content">
                <div id="map" class="fixed-content"></div>
                <div class="flex-content">
                    <h1>{{ $center_data->name }}</h1>
                    <p>住所: {{ $center_data->address }}</p>
                    <p>経度: {{ $center_data->lat }}</p>
                    <p>緯度: {{ $center_data->lng }}</p>
                </div>
                </div>
                <div class="form">
                    <h2>スポット追加</h2>
                    <div class="sample_box10">
                        <form action="{{ route('gmaps.store') }}" method="POST" id="form_register">
                            @csrf
                            <div>
                                <p>Name</p>
                                <input type="text" name="gmap[name]" id="addressInput" placeholder="名前"/>
                            </div>
                            <div>
                                <p>Address</p>
                                <input type="text" name="gmap[address]" placeholder="住所"/>
                            </div>
                            <div>
                                経度:<input type="text" name="gmap[lat]" id="lat">
                            </div>
                            <div>
                                緯度:<input type="text" name="gmap[lng]" id="lng">
                            </div>
                            <div>
                                <button class="btn1 btn1-border" onclick="getLatLng()">スポット追加</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <script>
	    "use strict"
        let map;
        let marker = [];
        let infoWindow = [];
        let markerData = @json($gmaps);
        let centerData = @json($center_data);
        
        function initMap() {
            let mapLatLng = {lat: centerData['lat'], lng: centerData['lng']};
            map = new google.maps.Map(document.getElementById('map'), {
                center: mapLatLng,
                zoom: 12
            });
            
            for (let i=0; i<markerData.length; i++) {
                let markerLatLng = {lat: markerData[i]['lat'], lng: markerData[i]['lng']};
                marker[i] = new google.maps.Marker({
                    position: markerLatLng,
                    map: map
                });
                infoWindow[i] = new google.maps.InfoWindow({
                    content: markerData[i]['name']
                });
                markerEvent(i);
            }
        }
        
        function markerEvent(i) {
            marker[i].addListener('click', function() {
                infoWindow[i].open(map, marker[i]);
            });
        }
        
        function getLatLng() {
            let address = document.getElementById('addressInput').value;
            let geocoder = new google.maps.Geocoder();
            
            geocoder.geocode({
                        'address': address
                    }, function(results, status) {
                        if (status === google.maps.GeocoderStatus.OK) {
                            
                            let lat = results[0].geometry.location.lat();
                            let lng = results[0].geometry.location.lng();
                            
                            document.getElementById("lat").value = lat ;
                            document.getElementById("lng").value = lng ;
                            
                            document.getElementById("form_register").submit();
                            
                        } else if (status == google.maps.GeocoderStatus.ZERO_RESULTS) {
                            alert("住所が見つかりませんでした。");
                        } else if (status == google.maps.GeocoderStatus.ERROR) {
                            alert("サーバ接続に失敗しました。");
                        } else if (status == google.maps.GeocoderStatus.INVALID_REQUEST) {
                            alert("リクエストが無効でした。");
                        } else if (status == google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {
                            alert("リクエストの制限回数を超えました。");
                        } else if (status == google.maps.GeocoderStatus.REQUEST_DENIED) {
                            alert("サービスが使えない状態でした。");
                        } else if (status == google.maps.GeocoderStatus.UNKNOWN_ERROR) {
                            alert("原因不明のエラーが発生しました。");
                        }
                    });
        }
        
        function deleteGmap(id) {
            if (confirm('本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
	    </script>
	    <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyASFvrII9-Rp58fdW9Ubrb4p91K1lZ2ANQ&callback=initMap" async defer></script>
    </body>
</html>
