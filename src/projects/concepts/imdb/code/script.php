<?php

	if(isset($_POST['search']) && !empty($_POST['search'])){

		$search = trim($_POST['search']);
		$search = str_replace(' ', '+', $search);

		searchApiByAll($search);
	}



	function searchApiByAll($search){
		$get = file_get_contents('http://www.omdbapi.com/?s=' . $search . '&r=json');
		$decode = json_decode($get, TRUE);

		foreach ($decode as $result =>$row) {
			foreach ($row as $key => $value) {
				searchApiById($value['imdbID'], 'short');
			}
		}
	}



	function searchApiById($id, $plot){
		$get = file_get_contents('http://www.omdbapi.com/?i=' . $id . '&y=&plot=' . $plot . '&r=json');
		$decode = json_decode($get, TRUE);

		displaySearchResults($decode);

		// $results = array('poster' => getArtworkById($id), 'information' => displaySearchResults($decode));
		// return json_encode($results);
		echo $results;
	}



	function displaySearchResults($result){
		$output = '';

		$output .= '<div class="info grid">';
		$output .= '<div class="info__item grid__item desk--one-whole lap--one-whole palm--one-whole">';
			// $output .= '<span class="info__id">' . $result['imdbID'] . '</span> ';
			$output .= '<span class="info__title">' . $result['Title'] . '</span> ';
			$output .= '<span class="info__year">(' . $result['Year'] . ')</span> ';
		$output .= '</div>';
		$output .= '<div class="grid__item desk--one-half lap--one-half portable--one-whole">';
			$output .= '<div class="info__item"><strong>Runtime: </strong>' . $result['Runtime'] . '</div>';
			$output .= '<div class="info__item"><strong>Classification: </strong>' . $result['Rated'] . '</div>';
			$output .= '<div class="info__item"><strong>Genres: </strong>' . $result['Genre'] . '</div>';
			$output .= '<div class="info__item"><strong>Director: </strong>' . $result['Director'] . '</div>';
			$output .= '<div class="info__item"><strong>Actors: </strong>' . $result['Actors'] . '</div>';
			$output .= '<div class="info__item"><strong>Writers: </strong>' . $result['Writer'] . '</div>';
		$output .= '</div>';

		$output .= '<div class="grid__item desk--one-half lap--one-half portable--one-whole">';
			$output .= '<strong>About: </strong> ' . $result['Plot'];
		$output .= '</div>';
		$output .= '</div>';
		
		echo $output;
	}

	function getArtworkById($id){
		$poster = '';

		$poster = '<img src="static/images/poster-soon.png" alt="Poster Coming Soon" width="150" height="250">';

		echo $poster;
	}


	

?>