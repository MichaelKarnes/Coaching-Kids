$(document).ready(function () {
    $("#changeBanner").submit(function (event) {
        if ($("#changeBanner #fileSelect").val().length == 0)
            event.preventDefault();
    });
    $(".newsList li a").mouseover(function () {
        var maxMarginLeft = $(this).width() - 454;
        $(this).animate({ marginLeft: "-" + maxMarginLeft + "px" }, 15 * maxMarginLeft, "linear");
    });
    $(".newsList li a").mouseout(function () {
        $(this).stop();
        $(this).css("marginLeft", "0");
    });
});