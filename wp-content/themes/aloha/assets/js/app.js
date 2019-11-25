jQuery(document).ready(function($){

	$(window).scroll(function(){
		var scroll = $(window).scrollTop();
		var height = $('.header').outerHeight();

		if (scroll > height ) {

		    $(".header").addClass("sticky");
		}
		else{
		    $(".header").removeClass("sticky");
		}
	});
	
	$('.customers-testimonial').slick({
	  	infinite: true,
		autoplay: true,
		autoplaySpeed: 3500,
	  	slidesToShow: 1,
	  	slidesToScroll: 1

	});

	$('.slider-for').slick({
	  	slidesToShow: 1,
	  	slidesToScroll: 1,
	  	arrows: false,
	  	fade: true,
	  	asNavFor: '.slider-nav'
	});

	$('.slider-nav').slick({
	  	slidesToShow: 4,
	  	slidesToScroll: 1,
	  	asNavFor: '.slider-for',
	  	dots: true,
	  	centerMode: false,
	  	focusOnSelect: true,
	  	responsive: [
		    {
		    	breakpoint: 767,
		      	settings: {
		        	slidesToShow: 3
		    	}
		  	},
		    {
		      	breakpoint: 600,
			    settings: {
			        slidesToShow: 2
			    }
			},
	    	{
	      		breakpoint: 480,
	      		settings: {
	        		slidesToShow: 1
	      		}
	    	}
	  	]
	});

	$('.activities-slider').slick({
	  	slidesToShow: 3,
	  	slidesToScroll: 1,
	  	dots: false,
	  	arrows: true,
	  	responsive: [
		    {
		    	breakpoint: 767,
		      	settings: {
		        	slidesToShow: 2
		    	}
		  	},
		    {
		      	breakpoint: 600,
			    settings: {
			        slidesToShow: 2
			    }
			},
	    	{
	      		breakpoint: 480,
	      		settings: {
	        		slidesToShow: 1
	      		}
	    	}
	  	]
	});

	$("#myModal .login-btn").click(function(){
	  	$("#myModal").modal('hide');
	});

	$("#loginModal .signup-btn").click(function(){
	  	$("#loginModal").modal('hide');
	});

	$(document).ready(function(){
    // Add minus icon for collapse element which is open by default
	    $(".privacy-policy-section .collapse.show").each(function(){
	        $(this).prev(".card-header").find(".svg-inline--fa").addClass("fa-angle-up").removeClass("fa-angle-down");
	    });
	    
	    // Toggle plus minus icon on show hide of collapse element
	    $(".privacy-policy-section .collapse").on('show.bs.collapse', function(){
	        $(this).prev(".card-header").find(".svg-inline--fa").removeClass("fa-angle-down").addClass("fa-angle-up");
	    }).on('hide.bs.collapse', function(){
	        $(this).prev(".card-header").find(".svg-inline--fa").removeClass("fa-angle-up").addClass("fa-angle-down");
	    });
	});

	$(".card").slice(0, 6).show();
  	$("#loadMore").on("click", function(e){
	    e.preventDefault();
	    $(".card:hidden").slice(0, 6).slideDown();
	    if($(".card:hidden").length == 0) {
	      $("#loadMore").hide();
	    }
  	});

  	$(document).on('click', '.contact-us-banner a[href^="#"]', function (event) {
	    event.preventDefault();

	    $('html, body').animate({
	        scrollTop: $($.attr(this, 'href')).offset().top - 50
	    }, 500);
	});

	jQuery(document).ready(function() {
	    jQuery('.accessories-tab table tr').click(function(event) {
	        if (event.target.type !== 'checkbox') {
	            jQuery(':checkbox', this).trigger('click');
	        }
	    });
	});
});

AOS.init({
  duration: 1200,
})

/**Date-Picker-Depart-Arrive-start**/

jQuery( function($) {
$( ".datepicker" ).datepicker();
$( "#format" ).on( "change", function() {
  $( ".datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
});
} );

jQuery("input[type=text].datepicker").keyup(function (e) {
    var textSoFar = jQuery(this).val();
    if (e.keyCode != 191) {
        if (e.keyCode != 8) {
            if (textSoFar.length == 2 || textSoFar.length == 5) {
                jQuery(this).val(textSoFar + "/");
            }
                //to handle copy & paste of 8 digit
            else if (e.keyCode == 86 && textSoFar.length == 8) {
                jQuery(this).val(textSoFar.substr(0, 2) + "/" + textSoFar.substr(2, 2) + "/" + textSoFar.substr(4, 4));
            }
        }
        else {
            //backspace would skip the slashes and just remove the numbers
            if (textSoFar.length == 5) {
                jQuery(this).val(textSoFar.substring(0, 4));
            }
            else if (textSoFar.length == 2) {
                jQuery(this).val(textSoFar.substring(0, 1));
            }
        }
    }
    else {
        //remove slashes to avoid 12//01/2014
        jQuery(this).val(textSoFar.substring(0, textSoFar.length - 1));
    }
});

/**Date-Picker-Depart-Arrive-end**/

/**Book-By-Stay-Cart-Payment-Method-start**/


jQuery(document).ready(function ($) {
	$("input[name$='payment']").click(function () {
		var test = $(this).val();

		$("div.payment-input").hide();
		$("#Payment" + test).show();
	});
});

jQuery(document).ready(function ($) {
	$('#paypal-select').click(function () {
		$('#paypal-bg').attr('class', this.value);
		$('#card-bg').attr('class', this.value);
	});
	$('#card-select').click(function () {
		$('#card-bg').attr('class', this.value);
		$('#paypal-bg').attr('class', this.value);
	});
});


/**Book-By-Stay-Cart-Payment-Method-start**/

jQuery(document).ready(function ($) {
	$('.map-overlay-content a.anchor-icon').click(function(){
	    $(this).find('i').toggleClass('fa-plus fa-times');
	    $(this).find('svg').toggleClass('fa-plus fa-times');
	    $(".map-overlay-content a.anchor-icon").not(this).find('i').removeClass('fa-times').addClass('fa-plus');
	    $(".map-overlay-content a.anchor-icon").not(this).find('svg').removeClass('fa-times').addClass('fa-plus');
	    $(this).toggleClass('icon-change');
	    $(this).siblings(".info-pop-up").toggle();
	    $(".map-overlay-content a").not(this).siblings(".info-pop-up").hide();
	});
});

/**Book-By-Stay-Cart-Payment-Method-start**/


	


/*induge tab code*/
/*Nav tab*/

/*var url = window.location.href;

var activeTab = url.substring(url.indexOf("#") + 1);

jQuery(".tab-pane").removeClass("active show");

jQuery("#" + activeTab).addClass("active show");

jQuery('a[href="#'+ activeTab +'"]').tab('show')*/

/*******Not Showing Past end date as per start date in home page*********/

                     
						
/****************Auto calculated date***************/
	
jQuery("#startdate").on('change', function(){
	
	var tt = document.getElementById('startdate').value;

    var date = new Date(tt);
    var newdate = new Date(date);
    numberDays = jQuery("input[name='rGroup']:checked").val();
    newdate.setDate(newdate.getDate() + (numberDays-parseInt(1)));
    
    var dd = newdate.getDate();
    var mm = newdate.getMonth() + 1;
    var y = newdate.getFullYear();

    var someFormattedDate = mm + '/' + dd + '/' + y;
	document.getElementById('enddate').value = someFormattedDate;

});

function daysclick (numberDays){
	
	var tt = document.getElementById('startdate').value;
	
	if(tt !=''){

		var date = new Date(tt);
		var newdate = new Date(date);
		newdate.setDate(newdate.getDate() + (numberDays-parseInt(1)));
		
		var dd = newdate.getDate();
		var mm = newdate.getMonth() + 1;
		var y = newdate.getFullYear();

		var someFormattedDate = mm + '/' + dd + '/' + y;
		document.getElementById('enddate').value = someFormattedDate;
	}
	
}