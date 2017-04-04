$(document).ready(function(){
    /*menu_list 아이콘 클릭시 nav 출현*/
    $('.menu_list').click(function(){
        $('.nav').animate({right:'0px'});
            $('body').css({'overflow':'hidden'});
              $(window).bind('scroll',function(){ 
                   window.scrollTo(0,0); 
              });
    });
    
    /*nav close*/
    $('.close, .bodyStop').click(function(){
        $('.nav').animate({right:'-240px'});
        $(window).unbind('scroll'); 
    });
    
    /*스크롤 버튼*/
    $('.scroll').click(function(){
        var scroll_top = $(".scroll_top").outerHeight();
        $('html').smoothScroll(scroll_top,500);
    });
    
    /*menu_scroll누를시 가장밑으로 스크롤*/
    
    /*header 변형*/
    $(window).scroll(function(){
        didScroll = true;
    });
    
});