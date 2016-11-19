$(document).ready(function(){

  // Hide Entire Work History by default
  var work_history_hidden = true;

  // Hover for Social Icons (Semantic-UI)
	$('.hover').popup();

  // Hide Elements by default
	$('#contact_sending_message').hide();
	$('#contact_success_message').hide();
	$('.default_hide').hide();


  // Siderbar (Mobile Menu)
  $('.ui.sidebar').sidebar('toggle');
  $('.hamburger').click(function(){
    $('.ui.sidebar').sidebar('toggle');
  });

	// Hide sidebar when menu item is clicked
  $('.ui.sidebar').click(function(){
    $('.ui.sidebar').sidebar('hide');
  });

  /*
  * Click Function
  *
  * Change global variable and change content of button when clicked.
  */
  $('#work_history_toggle').click(function(event){
			event.preventDefault();

			if(work_history_hidden){
				$('.default_hide').slideDown('slow');
				$('#work_history_toggle').html('<i class="angle up icon"></i>Hide work history &nbsp;<i class="angle up icon"></i>');
				work_history_hidden = false;
			} else {
				$('.default_hide').slideUp('slow');
				$('#work_history_toggle').html('<i class="angle down icon"></i>Show entire work history &nbsp;<i class="angle down icon"></i>');
				work_history_hidden = true;
			}
	});

  /**
	 * Bind all links, that require a document viewer to a click event.
	 *
	 * @param  {obj} 	event 		preventDefault event
	 * @param  {string} success		if Ajax call is successful add content to html
	 *                           	and open modal.
	 * @return {[type]}
	 */
	$('.documentation').click(function(event){
		event.preventDefault();
		var doc_target = $(this).attr('data-content');

		// Send link to script and append response to html
		$.ajax({
			url: 'inc/get_document.php',
			type: 'POST',
			data: {doc : doc_target},
			success: function(response){
				$('.ui.modal.small.document').html(response);

				// open modal
				$('.ui.modal.small.document')
					.modal('setting', 'transition', 'fade')
					// .modal('refresh')
					.modal('setting', 'offset', 300)
					// .modal('setting', 'detachable', false)
					.modal('show');
			}
		});
	});

  $('form').submit(function(event){
		event.preventDefault();

		var $form = $(this);
		var serializedData = $form.serialize();
		var recaptcha = $("#g-recaptcha-response").val();
		var recaptcha2 = $("#recaptcha-anchor").attr('aria-checked');

		$.ajax({
			url: 'script/mail.php',
			type: 'POST',
			// data: {form : serializedData, captchaResponse : recaptcha},
			data: serializedData,
			dataType: 'json',
			beforeSend: function(){
				$('#contact_sending_message').show();
			},
			success: function(response){
				$('#contact_sending_message').hide();
				$('#contact_error_message').hide();

				if(!response['pass']){
					$('#contact_error_message').show();
					$('#contact_error_message').html('<i class="warning sign icon"></i> ' +
						response['message']);
				} else{
					$('#contact_success_message').show();
					$('#contact_success_message').html('<i class="checkmark icon"></i> ' + response['message']);
				}
				console.log(response);
				console.log(response['debug_error']);
			}
		})
	});

  /**
	 * Settings for Contact form modal and attach
	 */
	$('.ui.modal.form')
		.modal({
			onApprove: function(){
				return false;
			}
		})
		.modal('setting', 'transition', 'horizontal flip')
		.modal('setting', 'autofocus', true)
		.modal('attach events', '#hire_me', 'show');


	$('.ui.form').form({
		on: 'blur',
	    fields: {
	      name: {
	        identifier  : 'contact[name]',
	        rules: [{
	            type   : 'empty',
	            prompt : 'Please enter your name'
	          }]
	      },
	      email: {
	        identifier  : 'contact[email]',
	        rules: [{
	            type   : 'email',
	            prompt : 'Please enter your email Address'
	          }]
	      },
	      phone: {
	        identifier  : 'contact[phone]',
	        rules: [{
	            type   : 'empty',
	            prompt : 'Please enter your phone number'
	          }]
	      },
	      message: {
	        identifier  : 'contact[message]',
	        rules: [{
	            type   : 'empty',
	            prompt : 'Please enter a message'
	          }]
	      }
	    }
	});

    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-48938252-2', 'auto');
    ga('send', 'pageview');
});
