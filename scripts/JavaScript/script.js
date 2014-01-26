$("#pop-up").css("height", $(document).height());

$("#click").click(function() {
	$("#pop-up").fadeIn(200);
});

$("#close").click(function() {
	$("#pop-up").hide();
});