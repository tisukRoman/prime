$(".reviews__list").slick({
  infinite: true,
  autoplay: true,
  arrows: false,
  responsive: [
    {
      breakpoint: 3000,
      settings: "unslick",
    },
    {
      breakpoint: 767.98,
      settings: {
        slidesToShow: 1,
        slidesToShow: 1,
      },
    },
  ],
});
