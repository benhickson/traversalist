$(window).on('load resize', function(){
    if (window.innerWidth <= 991) {
        $('.w-nav-overlay').append($('.w-nav-menu'));
        $('.w-nav-menu').css({'width': '100%', 'display': 'block'}).hide();
    } else {
        $('.navigation-container').append($('.w-nav-menu'));
        $('.w-nav-menu').css({'width': '', 'display': 'flex' }).show();
    }
});

$(document).ready(function () {
    $('.w-nav-button').click(function() {
        $('.w-nav-overlay').show().height(window.innerHeight);
        $('.w-nav-menu').slideToggle(500);
    })    
});

