$(document).ready(function() {
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("show");
    });

    $(".sidebar-dropdown").click(function() {
        $(this).children(".dropdown-list").slideToggle();
    });
    var map = L.map('map').setView([-4.448988, 119.808248], 5);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
});

function btnMenu(){
    $("#custom-sidebar").toggleClass("d-none");
    $("#custom-sidebar-back").toggleClass("d-none");
}