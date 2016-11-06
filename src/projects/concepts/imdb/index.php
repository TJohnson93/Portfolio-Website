<!-- http://www.timbrack.de/arbeiten/imdb/ -->

<!DOCTYPE html>
<html>
<head>
	<title>IMDB - Concept Work</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="static/css/style.css">

	<?php include_once('code/script'); ?>
</head>
<body>
	<div class="page">
		<div class="header">
			<div class="header__logo">
				<strong>IMDb</strong>
			</div>
			<div class="header__menu">
				<ul class="nav">
					<li class="nav__item"><a href="#">Movies</a></li>
					<li class="nav__item"><a href="#">TV</a></li>
					<li class="nav__item"><a href="#">News</a></li>
					<li class="nav__item"><a href="#">Showtimes</a></li>
				</ul>
			</div>
		</div>

		<div class="content">
			<div class="search">
				<div class="search__bar">
					<form method="post" action="">
						<div class="search_container">
							<input id="search" type="text" name="search" placeholder="Search All Movies?" autocomplete="off"> <br>
							<input type="submit" id="submit" value="Search">
						</div>
					</form>
				</div>
				<div class="search__suggestions"></div>
			</div>

			<div class="primary">
				<div class="sort">
					<strong>Sort by </strong>
					<span class="sort__option">Relevance</span> | 
					<span class="sort__option">A-Z</span> | 
					<span class="sort__option">Year</span> | 
					<span class="sort__option">Rating</span>
				</div>
				<div class="list">

					<div id="loader" align="center">
						<img src="static/images/ajax-loader.gif" alt="Loading Content">
					</div>
					
					<div class="list__option grid">
						<div class="cover grid__item desk--two-twelfths lap--two-twelfths palm--one-whole">
						<div id="display_poster">
							
						</div>
							<!-- <img src="static/assets/pictures/movies/iron_man_1_poster.jpg" alt="Iron Man 3" width="150" height="250"> -->
						</div>
						<div class="grid__item desk--ten-twelfths lap--ten-twelfths palm--one-whole">
							<div id="display_info">

							</div>
						</div>
					</div>

					
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript">
	
	$(document).ready(function() {
		$('#search').focus();
		$('#loader').hide();

		$('#submit').click(function(e) {
			e.preventDefault();
			var value = $('#search').val();

	        $.ajax({
	            type: "POST",
	            url: 'code/script.php',
	            data: {'search': value},
	            // dataType: 'json',
	            beforeSend: function() {
	            	$('#display').empty();
				    $('#loader').show();
				},
				complete: function(){
				    $('#loader').hide();
				},
	            success: function(data) {
	            	// var response = JSON.parse(data);
	                // $('#display_poster').html(response.poster);
	                // $('#display_info').html(response.information);
	                $('#display_info').html(data);
	            }
	       });
		})
    });

</script>
</body>
</html>