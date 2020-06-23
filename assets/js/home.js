jQuery(document).ready(function($) {

    var homeSlider = $('#main .homeSlider');
    homeSlider.slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 6000,
        prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
    });

    /*
    Animate elements when shown on screen
      Syntax: 
      animateOnShow(targetElem, pixelShownOnScreen);
      Need specific attribute assigned in the front end, see docs 
    */
    animateOnShow("#main .mainTitle", 100);
    animateOnShow("#main .mainTitleText", 20);
    animateOnShow("#main .mainTitlePhoto", 20);
    animateOnShow("#watchVideoBtnBox", 20);
    animateOnShow("#main .features h2", 20);
    animateOnShow("#main .features .ccol .info h5", 20);

    var logoCarousel = $('#main .logoCarousel .box');
    logoCarousel.slick({
        dots: false,
        infinite: true,
        speed: 800,
        slidesToShow: 5,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows : false,
        responsive: [
            {
                breakpoint: 1199.98,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 767.98,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            },
        ],

    });

    $('#watchVideoBtnBox').magnificPopup({
        delegate: 'a'
    });

    var testimonialBox = $('#main .testimonialBox');
    testimonialBox.slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 6000,
        adaptiveHeight: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
    });




}); //end of jQuery(document).ready


    
