jQuery(document).ready(function($){

    var windowHeight = $(window).height();
    var headerHeight = $('.top-header .container').outerHeight();
    var menuHeight = windowHeight - headerHeight;

    $(".main-menu").css('top', headerHeight);
    $(".video-wrapper").css('height', menuHeight);

    $(".nav-trigger").on('click', function(){
        var windowHeight = $(window).height();
        var headerHeight = $(this).parent().parent().find('.container').outerHeight();
        var menuHeight = windowHeight - headerHeight;

        $(this).toggleClass('open');
        $(this).parent().parent().toggleClass('show-menu');
        $('body').toggleClass('lock');

        $(this).parent().next(".main-menu").css('top', headerHeight).css('height', menuHeight+'px');

        if ($(this).hasClass('open') ) {
            $(this).parent().next(".main-menu").css('top', headerHeight).css('height', menuHeight+'px');
        } else {
            $(this).parent().next(".main-menu").css('top', headerHeight).css('height', '0');
        }
    });
    
    var $header = $(".top-header"),
    $clone = $header.before($header.clone(true).addClass("clone"));    
    $(window).on("scroll", function() {
        var fromTop = $(window).scrollTop();
        $("body").toggleClass("down", (fromTop > 200));
    });

    // Slick Slider options
    $('.slides').slick({
        infinite: true,
        dots: true,
        arrows: false
    });

    $('div[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
        $('.slides').slick('setPosition');
    });

    
});