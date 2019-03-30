$(document).ready(function() {

	if ($(window).width() <= 768) {
	   $("nav").removeClass("fixed-top");
	}
	else {
	   $("nav").addClass("fixed-top");
	}

	var selector = '#list-switching li';
	$(selector).hover(function(){
	    $(selector).removeClass('active');
	    $(this).addClass('active');
	});

	$("#list-switching li a").hover(function(){
        $(".hide").hide();
        var myDiv = $(this).attr("href");
        $(myDiv).show();
        $(myDiv).addClass('animated fadeInDown');
        // $("#list-switching li").addClass('bg-white');
    });

    (function() {
		'use strict';
		window.addEventListener('load', function() {
			var forms = document.getElementsByClassName('needs-validation');
			var validation = Array.prototype.filter.call(forms, function(form) {
			   	form.addEventListener('submit', function(event) {
			        if (form.checkValidity() === false) {
			          event.preventDefault();
			          event.stopPropagation();
			        }
			        form.classList.add('was-validated');
			    }, false);
			});
		}, false);
	})();

});