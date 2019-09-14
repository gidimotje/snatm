$(".home").click(function(e) {
    e.preventDefault();
});

$(".ambiance").click(function(e) {
    e.preventDefault();
    var offset = 20; //Offset of 20px

    $('html, body').animate({
        scrollTop: $("#ambiance").offset().top + offset
    }, 1000);
});

$(".order").click(function(e) {
    e.preventDefault();
    var offset = 20; //Offset of 20px

    $('html, body').animate({
        scrollTop: $("#order").offset().top + offset
    }, 1000);
});