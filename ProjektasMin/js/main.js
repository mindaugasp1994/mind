var slider = tns({
    container: '.articles-slider',
    items: 1,
    slideBy: 1,
    autoplay: false,
    gutter: 30,
    nav: false,
    controlsContainer: ".slider-controls",
    responsive: {
        768: {
            items: 3
        }
    }
});
var slider = tns({
    container: '.clients-slider',
    items: 3,
    slideBy: 1,
    autoplay: false,
    gutter: 30,
    nav: false,
    controlsContainer: ".clients-slider-controls",
    responsive: {
        768: {
            items: 6
        }
    }
});
var slider = tns({
    container: '.blog-slider',
    items: 1,
    slideBy: 1,
    autoplay: false,
    gutter: 0,
    nav: false,
    controlsContainer: ".blog-slider-controls",
    responsive: {
        768: {
            items: 1
        }
    }
});