$(document).ready(function(){

	$('#quote-btn').click(function(event){
		event.preventDefault();

		getQuote();
	});

	$('#tweet').click(function(event) {
		var quote = $('.quote').text();
		var author = $('.quote_author').text();

		if(quote.length + author.length > 150){
			event.preventDefault();
			sweetAlert({
				title: 'Whoops!', 
				text: 'Quote is too long to Tweet', 
				type: 'error',
				allowEscapeKey: true,
				allowOutsideClick: true,
				confirmButtonText: 'Damn... That Sucks!'
			});
		} else {
		    var twitter = "https://twitter.com/intent/tweet?text=" + 
		    	"%22" + encodeURIComponent(quote) + "%22" + 
		    	'%0a' + "-" + author;
		    $(this).attr("href", twitter);
		}
	});

	$('#more_info').click(function(event) {
		event.preventDefault();
		var msg = ' This Random Quote Generator app has been created as per specification for Free Code Camp. Please review the <a href="http://concept.kwarzastudios.com/freecodecamp/quotemachine/humans.txt" title="humans.txt" target="_blank"> humans.txt</a> file for more information about the developer, technologies &amp; resources used in this project. This entire project file can be found on <a href="https://github.com/TJohnson93/FreeCodeCamp" title="Github" target="_blank">Github</a>.</p>';
		sweetAlert({
				title: "Free Code Camp",   
				text: msg,   
				type: "info",   
				showCancelButton: true, 
				html: true,    
				confirmButtonText: "See Humans.txt",   
				cancelButtonText: "Close",   
				closeOnConfirm: false,   
				closeOnCancel: true,
				allowOutsideClick: true 
			},
			function(isConfirm){   
				if (isConfirm) {     
					window.open('http://concept.kwarzastudios.com/freecodecamp/quotemachine/humans.txt');
					sweetAlert.close();
				} 
			});
	});


	function getQuote(){
		$.ajax({
			url: 'https://andruxnet-random-famous-quotes.p.mashape.com/cat=movies',
			type: 'POST',
			datatype: 'json',
			beforeSend: function(xhr){
				// Send Header for API Request 
				xhr.setRequestHeader("X-Mashape-Key", "JHB3TfgpetmshOE0UcF5Rbq0FipIp1DtqcLjsnQljxEXLRChYa");

				// Display AJAX Loader
				$('.quote').html('<img src="img/loader.gif">');
				$('.quote_author').html('');
			},
			success: function(data){
				data = JSON.parse(data);
				var quoteLeft = '<i class="fa fa-quote-left"></i>';
				var quoteRight = '<i class="fa fa-quote-right"></i>';

				$('.quote').html(quoteLeft + ' ' + data.quote + ' ' + quoteRight);
				$('.quote_author').html('- ' + data.author);
			},
			error: function(err){
				$('.quote').html('ERROR!', err, 'error');
			}
		});
	}

});