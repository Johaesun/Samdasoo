$(document).ready(function () {
	$(".notice_btn").click(function () {
		if ($(".content_box").hasClass("box_off")) {
			display();
		} else {
			none();
		}
		$(".notice").css({
			"overflow": "hidden"
		});
		/*$(".notice").animate({"height":"500px"})*/
	});

	function display() {
		$(".content_box").css({
			"padding": "50px 0px",
			"height": "auto",
		});
	}

	function none() {
		$(".content_box").css({
			"padding": "0px",
			"height": "0px",
		});
	}
	$(".close_btn").click(function () {
		none();
	});
});
