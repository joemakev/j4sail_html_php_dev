jQuery(document).ready(function($) {

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

//Init Magnific Popup
$('#galleryBox .galleryRow').each(function() { // the containers for all your galleries
    $(this).magnificPopup({
        delegate: 'a', // the selector for gallery item
        type: 'image',
        gallery: {
          enabled:true
        },
        image: {
            titleSrc: 'title' 
        },
    });
});

}); //jQuery(document).ready