jQuery(document).ready(function($) {

//Main slider
$('#main .projectSlider').slick({
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    autoplay: false,
    autoplaySpeed: 6000,
    prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
});

//Add container for "ALL" gallery items
$('#galleryBox .galleryCol').prepend('<div class="galleryRow all active"></div>');

//Add button for "ALL" filter
$('#galleryBox .galleryFilterBar ul').prepend('<li><a class="active" href="all">All</a></li>');

//Get each gallery items for "ALL" filter
$("#galleryBox .g_item").clone().appendTo("#galleryBox .galleryRow.all");

//Init masonry
var masonGallery = $('#galleryBox .galleryRow').masonry({
    itemSelector: '.g_item',
    // columnWidth: 200,
    // transitionDuration: 0, //Uncomment to disable animation
});

//Fix masonry layout each time an image is loaded
masonGallery.imagesLoaded().progress( function() {
    masonGallery.masonry('layout');
});

//Gallery filter
$('#galleryBox .galleryFilterBar li a').click(function(e) {
    e.preventDefault();
    var filterName = $(this).attr('href');
    $('#galleryBox .galleryFilterBar li a, #galleryBox .galleryRow').removeClass('active');
    $(this).addClass('active');
    $('#galleryBox').find('.galleryRow.'+filterName).addClass('active');
    masonGallery.masonry('layout');
});










}); //jQuery(document).ready