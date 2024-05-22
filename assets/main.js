$(document).ready(function() {

	$(".popup-btn").click(function() {
		$(".overlay, .popup").addClass("reveal");
	});

	$(".close-x").click(function() {
		$(".overlay, .popup").removeClass("reveal");
	});


	$(".category-selectors .btn").click(function() {
		$(".category-selectors .btn").removeClass("active");
		$(this).addClass("active");
	});	

	

	$(".grid-button").click(function() {
		$(".grid-button").removeClass("active");
		$(".overlay").addClass("reveal");
		$(".navigation-arrows").addClass("show");
		$("body").addClass("body-freeze");
	});
	$(".overlay, .close-x").click(function() {
		$(this).removeClass("reveal");
		$(".grid-popup").removeClass("active");
		$(".navigation-arrows").removeClass("show");
		$("body").removeClass("body-freeze");
	});
	

	$("#btn-published").click(function() {
		$(".published-paper").addClass("emphasize");
		$(".working-paper").removeClass("emphasize");
	});	

	$("#btn-working").click(function() {
		$(".working-paper").addClass("emphasize");
		$(".published-paper").removeClass("emphasize");
	});

	$(".grid-row").click(function() {
		$(".grid-button").removeClass("emphasize");
		$(".category-selectors .btn").removeClass("active");
	});

	
	


})

