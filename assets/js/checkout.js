jQuery(document).ready(function($) {
    var checkoutBox = $('#main .checkoutBox');

    checkoutBox.find('.expandClick').click(function(e) {
        e.preventDefault();
        $(this).closest('.clickBox').find('.inputForm').toggle();
    });



}); //jQuery(document).ready