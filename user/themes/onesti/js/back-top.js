// back to top
$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
            $('#backTop').fadeIn();
        } else {
            $('#backTop').fadeOut();
        }
    });
    $('#backTop').click(function() {
        $('html, body').animate({scrollTop: 0}, 600);
        return false;
    });
});

// window.onscroll = function() {
//     scrollFunction()
// };

// function scrollFunction() {
//     if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
//         document.getElementById("backTop").style.display = "block";
//     } else {
//         document.getElementById("backTop").style.display = "none";
//     }
// }

// function topFunction() {
//     document.body.scrollTop = 0;
//     document.documentElement.scrollTop = 0;
//     $('body, html').animate({scrollTop:scrollTo+'px'}, 800);
// }