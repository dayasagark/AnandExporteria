$(document).ready(function () {
    $(".sib_bar_btn").click(function () {
        $(this).toggleClass("active");
        $("nav.side_bar").toggleClass("open");
        $("section.page").toggleClass("open");
    });
    $(".left_menu_open_mob").click(function () {
        $(".full_screen_close").toggleClass("active");
        $(this).toggleClass("active");
        $("nav.side_bar").toggleClass("open");
    });
    $(".full_screen_close").click(function () {
        $(this).toggleClass("active");
        $(".left_menu_open_mob").toggleClass("active");
        $("nav.side_bar").toggleClass("open");
    });
});
