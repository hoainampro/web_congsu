jQuery(document).ready(function($) {
    if ($(window).width() < 768) {
        $('.tld-full-content').after($('.tlp-feature'));
    } else {
        $('.tld-full-content').before($('.tlp-feature'));
    }
    $(window).resize(function() {
        if ($(window).width() < 768) {
            $('.tld-full-content').after($('.tlp-feature'));
        } else {
            $('.tld-full-content').before($('.tlp-feature'));
        }

    });
});
