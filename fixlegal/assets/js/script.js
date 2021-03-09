$('.scroll-page').on('click', function(){
    var tujuan = $(this).attr('href');
    var test = $(tujuan).offset().top;
    $('html, body').animate({
        scrollTop: test - 75
    }, 1000);
});

$(window).scroll(function(){
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);

});