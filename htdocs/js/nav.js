$(document).ready(function () {
    $(".flickity-viweport").css({
        "height": $(window).height() + "px"
    });
    $(".carousel-cell").css({
        "height": $(window).height() + "px"
    });
    $(".scroll").click(function () {
        var top = $(".box01").offset().top;
        header_scroll();
        $('body').animate({
            'scrollTop': top + "px"

        });
    });
    /*menu_list 아이콘 클릭시 nav 출현*/
    $('.menu_list').click(function () {
        $('.nav').animate({
            right: '0px'
        });
        $(window).on('scroll', function () {
            return false;
        });
        $(".bag").addClass("bag_color");
    });

    /*nav close*/
    $('.close, .bodyStop').click(function () {
        $('.nav').animate({
            right: '-240px'
        });
        $('body').css({
            'overflow': 'visible'
        });
        $(window).on('scroll', function () {
            return true;
        });
        $("bag").removeClass("bag_color");
        $(".bag_color").css({
            'display': 'none'
        });
    });

    /*스크롤 버튼*/
    $('.scroll').click(function () {
        var scroll_top = $(".scroll_top").outerHeight();
        $('html').smoothScroll(scroll_top, 500);
    });

    /*menu_scroll누를시 가장밑으로 스크롤*/
    var top = $("footer").offset().top;
    $(".menu_scroll").click(function () {
        $('body').animate({
            'scrollTop': top + "px"
        });
    });

    /*개인정보정책*/
    $(".etcBtn").click(function () {
        $(".bag").addClass("bag_color");
        $(".etcFix").css({
            "display": "block",
        });
    });
    
    /*개인정보정책 close*/
    $(".etcFix_close").click(function(){
        $(".bag").removeClass("bag_color");
        $(".etcFix").css({
            "display": "none",
        });
    });

    /*header 변형*/
    $(window).on("scroll mousewheel", function () {
        var top = $(".box01").offset().top;
        var scroll = $(window).scrollTop();
        if (scroll >= top) {
            header_scroll();
        }
        if (top > scroll) {
            $("header").removeClass("header_scroll");
            $("header").css({
                "padding-top": "20px"
            });
        }
    });

    function header_scroll() {
        $("header").addClass("header_scroll");
        $("header").css({
            "padding-top": "0px"
        });
    };

    $(this).click(function(){
        $(this).addClass("feedback");
    });

});
