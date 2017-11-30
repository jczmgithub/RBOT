$('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(20).fadeIn(500);
}, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(20).fadeOut(500);
});