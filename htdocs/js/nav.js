$(document).ready(function(){
    $('.menu_list').click(function(){
        $('.nav').animate({right:'0px'});
            $('body').css({'overflow':'hidden'});
              $(document).bind('scroll',function () { 
                   window.scrollTo(0,0); 
              });
    });
    
    $('.close').click(function(){
        $('.nav').animate({right:'-240px'});
        $(document).unbind('scroll'); 
            $('body').css({'overflow':'visible'});
    });
    
    $('.menu_scroll').click(function(){
       $(window).scrollTop() == $(document).height() - $(window).height()
    });
    
});