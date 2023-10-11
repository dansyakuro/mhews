$(document).ready(function() {
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("show");
    });

    $(".sidebar-dropdown").click(function() {
        $(this).children(".dropdown-list").slideToggle();
    });
});