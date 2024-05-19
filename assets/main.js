$(document).ready(function() {

	$(".abstract-toggle-button").click(function() {
		$(".overlay").addClass("reveal");
		$(".grid-card").removeClass("show-abstract");
		$(this).parent(".grid-card").addClass("show-abstract");
	});

	$(".popup-btn").click(function() {
		$(".overlay, .popup").addClass("reveal");
	});

	$(".close-x").click(function() {
		$(".overlay, .popup").removeClass("reveal");
	});

	$(".overlay, .close-x").click(function() {
		$(this).removeClass("reveal");
		$(".grid-card").removeClass("show-abstract");
		$(".popup").removeClass("reveal");
	});	


	$(".category-selectors .btn").click(function() {
		$(".category-selectors .btn").removeClass("active");
		$(this).addClass("active");
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
		$(".grid-card").removeClass("emphasize");
		$(".category-selectors .btn").removeClass("active");
	});

	
	


})

