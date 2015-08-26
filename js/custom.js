$(document).ready(function() {
	// Profile info pic resize
	
	var profileH = $('.profile').outerHeight();
	$('.profile-pic.large').outerHeight(profileH);
	
	// Ends profile info pic resize
	
	// Blue overlay main
	
	var tabsH = $('.nav-tabs').outerHeight();
	$('.main-overlay').outerHeight(tabsH);

	// Ends blue overlay main
	
	$(window).resize(function(){
		$('.profile-pic.large').outerHeight(0);
		var profileH = $('.profile').outerHeight();
		$('.profile-pic.large').outerHeight(profileH);

		tabsH = $('.nav-tabs').outerHeight();
		$('.main-overlay').outerHeight(tabsH);
	});
});

