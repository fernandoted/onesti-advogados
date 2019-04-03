// $(document).on('ready', function() {
//     $(".scroll-h").slick({
//       dots: true,
//       vertical: true,
//       centerMode: true,
//       slidesToShow: 4,
//       slidesToScroll: 2
//     });
// });
$(document).on('ready', function() {
  $(".regular").slick({
    dots: true,
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 4
  });
  $(".vertical-center-2").slick({
    dots: true,
    vertical: true,
    centerMode: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    autoplay: true
  });
  $(".center").slick({
    dots: true,
    infinite: true,
    centerMode: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true
  });
});