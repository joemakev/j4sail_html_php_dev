jQuery(document).ready(function($) {
    var shop_table = $('#main .shop_table');
    shop_table.find('.minus').click(function(e) {
        e.preventDefault();
        adjustInputNumber($(this), 'minus');
    });

    shop_table.find('.plus').click(function(e) {
        e.preventDefault();
        adjustInputNumber($(this), 'plus');
    });

    function adjustInputNumber(elem, mode) {
        var targetInput = elem.closest('.quantity').find('input[type=number]');
        var val = targetInput.get(0).value;
        if(mode == "minus") {
            if(val > 0) {
                targetInput.get(0).value--;
            }
        } else if(mode == "plus") {
            targetInput.get(0).value++;
        }
    }


}); //jQuery(document).ready