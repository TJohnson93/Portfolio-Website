$(document).ready ->

  #Hide Entire Work History by default
  work_history_hidden = true

  # Hover for Social Icons (Semantic-UI)
	$('.hover').popup();

  # Hide Elements by default
	$('#contact_sending_message').hide();
	$('#contact_success_message').hide();
	$('.default_hide').hide();

  $('#work_history_toggle').click ->
    
