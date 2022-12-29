"use strict"

function initMap() {
    const map = document.getElementById("map");
    const tokyoTower = {lat: 35.6585769, lng: 139.7454506}
    const opt = {
        zoom: 13,
        center: tokyoTower
    };
    const mapObj = new google.maps.Map(map, opt);
}
