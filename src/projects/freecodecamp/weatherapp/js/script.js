$(document).ready(function () {

	//var isCelsius = true;

	var current_temp_C = 0,
		current_temp_F = 0,
		minimum_temp_C = 0,
		minimum_temp_F = 0,
		maximum_temp_C = 0,
		maximin_temp_F = 0;

	var location = '',
		nearest_area = '',
		current_condition = '';


	/**
	 * Lookup IP Address via the api found at jsonip.com
	 * @return {string} The user's IP address.
	 */
	$.ajax({
		url: 'http://jsonip.com',
		type: 'GET',
		//async:false,
		success: function(response) {
		    getWeather(response.ip);
		}
	});

	/**
	 * Change the current temperature display to either Celsius or
	 * Fahrenheit depending on the data-type parameter of the div 
	 * element with the class of `cur_temp_container`.
	 * @return {[type]}  [description]
	 */
	$('.cur_temp_container').click(function(){
		if($('.cur_temp_container').attr('data-type') === 'celsius'){
			$(this).attr('data-type', 'fahrenheit');
			$('span#cur_temp').html(current_temp_F);
		} else {
			$(this).attr('data-type', 'celsius');
			$('span#cur_temp').html(current_temp_C);
		}
	});

	/**
	 * Display all Weather Information to the user. This method calls
	 * other sub-functions.
	 * @return {[type]} [description]
	 */
	function displayWeather(){
		setBackgroundImage();
		displayTemperature();
		displayWeatherDescription();
		displayLocation();
	}

	/**
	 * Change the background image displayed to the user determined on
	 * the current temperature.
	 */
	function setBackgroundImage(){
		if (current_temp_C <= 10){
			$('body').css('background-image', 'url(img/bg_snow.jpg)');
		} else if (current_temp_C > 10 && current_temp_C < 35){
			$('body').css('background-image', 'url(img/bg_island.jpg)');
		} else if (current_temp_C <= 35 ){
			$('body').css('background-image', 'url(img/bg_uluru.jpg)');
		}
	}

	/**
	 * Displays the Location to the user.
	 * @return {[type]} [description]
	 */
	function displayLocation(){

		$('span#location').html(nearest_area + ', ' + location);
	}

	/**
	 * Display the Current Temperature to the user in either Celsius or
	 * Fahrenheit depending on the data-type parameter of the div element
	 * with the class of `cur_temp_container`.
	 * @return {[type]} [description]
	 */
	function displayTemperature(){
		if($('.cur_temp_container').attr('data-type') === 'celsius'){
			$('span#cur_temp').html(current_temp_C);
		} else{
			$('span#cur_temp').html(current_temp_F);
		}
	}

	/**
	 * Display the Weather Description to the user including a relevant
	 * icon matching the description
	 * @return {[type]} [description]
	 */
	function displayWeatherDescription(){
		switch(current_condition){
			case 'Partly Cloudy':
				$('span#weather_desc_icon').html('<img src="img/ico/partly_cloudy.png"/>');
				break;
			case 'Shower In Vicinity':
				$('span#weather_desc_icon').html('<img src="img/ico/showers.png"/>');
				break;
			case 'Light Rain Shower':
				$('span#weather_desc_icon').html('<img src="img/ico/light_showers.png"/>');
				break;
			case 'Sunny':
				$('span#weather_desc_icon').html('<img src="img/ico/showers.png"/>');
				break;
			default:
				$('span#weather_desc_icon').html('<img src="img/ico/partly_cloudy.png"/>');
				break;
				
		}
		$('span#weather_desc').html(current_condition);
	}

	/**
	 * Get Weather Information for today based on location of IP address.
	 * @param  {string} ip Users IP Address
	 * @return {[type]}    [description]
	 */
	function getWeather(ip){
		// Create URI for API call
		var my_key="d060d9a458282c529617511582913";
		var no_of_days=1;
		var uri="http://api.worldweatheronline.com/premium/v1/weather.ashx?q=" +
			ip + "&key=" + my_key + "&format=json&no_of_days=" + no_of_days +
			"&includeLocation=yes";

		// Encode URI for JSON API Request
		uri=encodeURI(uri);

		// Get JSON result from API
		$.get(uri,function(r){

			// Location Meta :
		    nearest_area = r.data.nearest_area[0].region[0].value;
		    location     = r.data.nearest_area[0].country[0].value;

		    // Temperature in Fahrenheit:
		    maximin_temp_F = r.data.weather[0].maxtempF;
		    current_temp_F = r.data.current_condition[0].temp_F;
		    minimum_temp_F = r.data.weather[0].mintempF;

		    // Temperature in Celsius:
		    maximum_temp_C = r.data.weather[0].maxtempC;
		    current_temp_C = r.data.current_condition[0].temp_C;
		    minimum_temp_C = r.data.weather[0].mintempC;
		    
		    // A short description of current  weather conditions:
		    current_condition = r.data.current_condition[0].weatherDesc[0].value;			    


			 // Display Weather
			 displayWeather();
		},"json");
	}
});