jQuery(function($) {'use strict',

	//#main-slider
	$(function(){
		$('.carousel').carousel({
			interval: 8000
		})
	});


	// accordian
	$('.accordion-toggle').on('click', function(){
		$(this).closest('.panel-group').children().each(function(){
		$(this).find('>.panel-heading').removeClass('active');
		 });

	 	$(this).closest('.panel-heading').toggleClass('active');
	});

	//Initiat WOW JS
	new WOW().init();

	// portfolio filter
	$(window).load(function(){'use strict';
		var $portfolio_selectors = $('.portfolio-filter >li>a');
		var $portfolio = $('.portfolio-items');
		$portfolio.isotope({
			itemSelector : '.portfolio-item',
			layoutMode : 'fitRows'
		});
		
		$portfolio_selectors.on('click', function(){
			$portfolio_selectors.removeClass('active');
			$(this).addClass('active');
			var selector = $(this).attr('data-filter');
			$portfolio.isotope({ filter: selector });
			return false;
		});
	});

	// Contact form
	var form = $('#main-contact-form');
	form.submit(function(event){
		event.preventDefault();
		$('#verzenden').prop('disabled', true);
		var form_status = $('<div class="form_status"></div>');
		$.ajax({
			url: $(this).attr('action'),
			type: "post",
			data: {
				voornaam : $('#voornaam').val(),
				naam : $('#naam').val(),
				geslacht : $('#geslacht').val(),
				email : $('#email').val(),
				telefoonnummer : $('#telefoonnummer').val(),
				opleiding : $('#opleiding').val(),
				opleidingsinstantie : $('#opleidingsinstantie').val(),
				event : $('#event option:selected').text(),
				bericht : $('#bericht').val(),
			},
			beforeSend: function(){
				form.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Inschrijving wordt verzonden...</p>').fadeIn() );
			}
		}).done(function(data){
			form_status.html('<p class="text-success">' + data.message + '</p>').delay(4000).fadeOut();
			setTimeout(function ()
			{
				$('#voornaam').val('');
				$('#naam').val('');
				$('#geslacht').val('man')
				$('#email').val('');
				$('#telefoonnummer').val('');
				$('#opleiding').val('');
				$('#opleidingsinstantie').val('');
				$('#bericht').val('');
				$('#verzenden').prop('disabled', false);
			}, 4000);	
		});
	});

	
	//goto top
	$('.gototop').click(function(event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: $("body").offset().top
		}, 500);
	});	

	//Pretty Photo
	$("a[rel^='prettyPhoto']").prettyPhoto({
		social_tools: false
	});	
});