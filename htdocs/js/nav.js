$(document).ready(function(){
    /*menu_list 아이콘 클릭시 nav 출현*/
    $('.menu_list').click(function(){
        $('.nav').animate({right:'0px'});
            $('body').css({'overflow':'hidden'});
              $(document).bind('scroll',function () { 
                   window.scrollTo(0,0); 
              });
        
        $('body').addClass('bodyStop');
        $('.block').css("opacity","0.5;")
    });
    
    /*nav close*/
    $('.close, .bodyStop').click(function(){
        $('.nav').animate({right:'-240px'});
        $(document).unbind('scroll'); 
            $('body').css('overflow', "0.5");
    });
    
    /*스크롤 버튼*/
    $('.scroll').click(function(){
        var scroll_top = $(".scroll_top").outerHeight();
        window.scrollTo(0,scroll_top)
    });
    
    /*menu_scroll누를시 가장밑으로 스크롤*/
    
    /*header 변형*/
    $(window).scroll(function(){
        didScroll = true;
    });
    
});