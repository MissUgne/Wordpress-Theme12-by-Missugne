/*! jQuery v3.4.1 | (c) JS Foundation and other contributors | jquery.org/license */

jQuery(document).ready(function($) {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
            $(".header").addClass("active");
        } else {
            //removes the background property so it comes transparent again
           $(".header").removeClass("active");
        }
    });
});




