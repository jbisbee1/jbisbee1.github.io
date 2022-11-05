$(document).ready(function() {
	
	$(".popup-btn").click(function() {
		$(".overlay").addClass("reveal");
		$(".popup").addClass("reveal");
	});

	$(".abstract-toggle-button").click(function() {
		$(".overlay").addClass("reveal");
		$(this).parents(".grid-card").next(".abstract").addClass("reveal");
	});

	$(".close-x").click(function() {
		$(".overlay, .abstract, .popup").removeClass("reveal");
	});

	$(".overlay").click(function() {
		$(".overlay, .abstract, .popup").removeClass("reveal");
	});


	$(".hamburger").click(function() {
		$(".header .main-nav").toggleClass("mobile-nav-show");
	});

	$(".plus-switch").click(function() {
		$(this).parents(".grid-row").toggleClass("grid-row-mobile-expand");
	});

})

