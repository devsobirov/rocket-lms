
    $(".courses-carousel").each(function () {
    let controls = $(this).data('controls-id');
    $(this).slick({
    rows: 1,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    speed: 1200,
    arrows: true,
    prevArrow: $(`.${controls} .left`),
    nextArrow: $(`.${controls} .right`),
    responsive: [
{
    breakpoint: 993,
    settings: {
    slidesToShow: 3,
    slidesToScroll: 1,
}
},
{
    breakpoint: 769,
    settings: {
    slidesToShow: 2,
    slidesToScroll: 1,
}
},
{
    breakpoint: 520,
    settings: {
    slidesToShow: 1,
    slidesToScroll: 1,
}
},
    ],
});
});

    $(".team-carousel").each(function () {
    let controls = $(this).data('controls-id');
    $(this).slick({
    rows: 1,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    speed: 1200,
    arrows: true,
    prevArrow: $(`.${controls} .left`),
    nextArrow: $(`.${controls} .right`),
    responsive: [
{
    breakpoint: 993,
    settings: {
    slidesToShow: 3,
    slidesToScroll: 1,
}
},
{
    breakpoint: 769,
    settings: {
    slidesToShow: 2,
    slidesToScroll: 1,
}
},
{
    breakpoint: 520,
    settings: {
    slidesToShow: 1,
    slidesToScroll: 1,
}
},
    ],
});
});
