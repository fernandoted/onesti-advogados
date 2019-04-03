let mainLogo = $('.main-logo');
let iconBars = $('.fa-bars');
let header = $('#header');

mainLogo.on('mouseover', function() {
    header.addClass('open');
});
iconBars.on('mouseover', function() {
    header.addClass('open');
});
header.on('mouseleave', function() {
    header.removeClass('open');
});

