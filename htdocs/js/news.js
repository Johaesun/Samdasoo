$(document).ready(function(){
    $(".notice_btn").click(function(){
        $(".content_box").addClass("click_off");
        $(".content_box").addClass("content_box_on");
    });
    $(".close_btn").click(function(){
        $(".content_box").addClass("click_off");
    });
});