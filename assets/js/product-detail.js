jQuery(document).ready(function($) {
    var quantityBox = $('#quantityBox');

    quantityBox.find('.minus').click(function(e) {
        e.preventDefault();
        adjustInputNumber('minus');
    });

    quantityBox.find('.plus').click(function(e) {
        e.preventDefault();
        adjustInputNumber('plus');
    });

    function adjustInputNumber(mode) {
        var targetInput = quantityBox.find('input[type=number]');
        var val = targetInput.get(0).value;
        if(mode == "minus") {
            if(val > 1) {
                targetInput.get(0).value--;
            }
        } else if(mode == "plus") {
            targetInput.get(0).value++;
        }
    }

    var productSliderMain = $('#main .productSliderMain');
    $('#main .productSliderMain').slick({
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        fade: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
        asNavFor: '#main .productSliderThumb'
    });

    var productSliderThumb = $('#main .productSliderThumb');
    productSliderThumb.slick({
        dots: false,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: false,
        arrows : false,
        centerMode: true,
        asNavFor: '#main .productSliderMain',
        focusOnSelect: true, //enable click on slider
        responsive: [
            {
                breakpoint: 575.98,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 380,
                settings: {
                    slidesToShow: 3,
                }
            },

        ],

    });





}); //jQuery(document).ready

