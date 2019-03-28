$(document).ready(function() {

	if ($(window).width() < 768) {
	   $("nav").removeClass("fixed-top");
	}
	else {
	   $("nav").addClass("fixed-top");
	}

	$("#list-switching li a").click(function(){
        $(".newscontainer").hide();
        var myDiv = $(this).attr("href");
        $(myDiv).show();
    });
	

});