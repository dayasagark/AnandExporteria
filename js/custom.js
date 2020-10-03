/*Main Header Slider Script*/
$('.hero_slider').owlCarousel({
    items: 1,
    loop: true,
    margin: 10,
    nav: true,
    navText: ["<img src='./images/arrow-left.png'>", "<img src='./images/arrow-right.png'>"],
    dots: false,
})

/*Mobile_screen Slider Script*/
$('.mob_sliderid').owlCarousel({
    items: 3,
    loop: true,
    margin: 10,
    nav: true,
    navText: ["<span class='glyphicon glyphicon-chevron-left'></span>", "<span class='glyphicon glyphicon-chevron-right'></span>"],
    dots: false,
    center: true,
    stagePadding: 180,
    responsive: {
        320: {
            items: 1,
            stagePadding: 00,
        },
        360: {
            items: 1,
            stagePadding: 00,
        },
        480: {
            items: 1,
            stagePadding: 00,
        },
        640: {
            items: 1,
            stagePadding: 00,
        },
        768: {
            items: 1,
            stagePadding: 220,
        },
        992: {
            items: 1,
            stagePadding: 290,
            center: true,
        },
        1200: {
            items: 3,
            stagePadding: 110,
            center: true,
        },
        1300: {
            items: 3,
            stagePadding: 130,
            center: true,
        },
        1500: {
            items: 3,
            stagePadding: 180,
            center: true,
        },
        2000: {
            items: 3,
            stagePadding: 300,
            center: true,
        }
    }
})


