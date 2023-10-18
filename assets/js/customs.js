var map = "";
var basic = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
});
$(document).ready(function() {
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("show");
    });

    $(".sidebar-dropdown").click(function() {
        $(this).children(".dropdown-list").slideToggle();
    });
    map = L.map('map').setView([-4.448988, 119.808248], 5);
    basic.addTo(map);
});

function btnMenu(){
    $("#custom-sidebar").toggleClass("d-none");
    $("#custom-sidebar-back").toggleClass("d-none");
}

function btnLayerServices(btn){
    $(btn).toggleClass("set-btn-layer");
    $("#arrow-layer").toggleClass("arrow-layer");
    $("#arrow-layer").toggleClass("set-arrow-layer");
    $("#layer-services").toggleClass("set-layer-services");
}

function setLayer(layer){
    map.removeLayer(basic);
    if(layer == "Terrain"){
        L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
    }else if(layer == "Satelite") {
        L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
    }else {
        basic.addTo(map);
    }
}