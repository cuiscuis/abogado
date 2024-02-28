 // Testimonials carousel
 $(".testimonials-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    responsive: {
        0:{
            items:1
        },
        576:{
            items:1
        },
        768:{
            items:2
        },
        992:{
            items:3
        }
    }
});


// Blogs carousel
$(".blog-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    responsive: {
        0:{
            items:1
        },
        576:{
            items:1
        },
        768:{
            items:2
        },
        992:{
            items:3
        }
    }
});
  // Sticky Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 90) {
        $('.nav-bar').addClass('nav-sticky');
        $('.carousel, .page-header').css("margin-top", "73px");
    } else {
        $('.nav-bar').removeClass('nav-sticky');
        $('.carousel, .page-header').css("margin-top", "0");
    }
});

// Portfolio isotope and filter
var portfolioIsotope = $('.portfolio-container').isotope({
    itemSelector: '.portfolio-item',
    layoutMode: 'fitRows'
});

$('#portfolio-flters li').on('click', function () {
    $("#portfolio-flters li").removeClass('filter-active');
    $(this).addClass('filter-active');

    portfolioIsotope.isotope({filter: $(this).data('filter')});
});