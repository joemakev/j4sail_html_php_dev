jQuery(document).ready(function($) {
    var targetRangeElem = document.getElementById('priceRangeSlider');
    var priceRangeSlider = noUiSlider.create(targetRangeElem, {
        start: [150, 600],
        connect: true,
        range: {
            'min': 0,
            'max': 1000
        },
    });

    var priceElem1 = $('#main .filterPrice span:nth-child(2)');
    var priceElem2 = $('#main .filterPrice span:last-child');
    priceRangeSlider.on("update", function() {
        var val = priceRangeSlider.get();
        priceElem1.text("$"+val[0]);
        priceElem2.text("$"+val[1]);
    });


}); //jQuery(document).ready()