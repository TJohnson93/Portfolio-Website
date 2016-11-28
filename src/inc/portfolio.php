<?php

  $portfolio = array(
    array('title' => 'Github - Gutsy', 'link' => 'https://github.com/TJohnson93/gutsy', 'sprite' => 'portfolio_github_gutsy', 'message' => 'A PHP database class to connect to MySQL, MS SQL &amp; SQLite via the PDO API.'),
    array('title' => 'Kwarza Studios', 'link' => 'http://www.kwarzastudios.com', 'sprite' => 'portfolio_kwarzastudios', 'message' => 'A Landing page for Kwarza Studios'),
    array('title' => 'Survaay Builder', 'link' => 'http://www.toddjohnson.com.au/projects/survaay/builder/builder.html', 'sprite' => 'portfolio_survaay_harcourts', 'message' => 'Concept of Survaay Builder', 'status' => 1),
    array('title' => 'Survaay Harcourt', 'link' => 'http://www.toddjohnson.com.au/projects/survaay/harcourts', 'sprite' => 'portfolio_survaay_creator', 'message' => 'A Property Management Survey for Harcourts. Running on the Survaay Platform, created by myself.', 'status' => 2),
    array('title' => 'Weather App', 'link' => 'projects/freecodecamp/weatherapp', 'sprite' => 'portfolio_freecodecamp_weatherapp', 'message' => 'A weather app that displays the current weather conditions based on the users geo location. Built with JavaScript.'),
    array('title' => 'Quote Generator', 'link' => 'projects/freecodecamp/quotemachine', 'sprite' => 'portfolio_freecodecamp_quotegenerator', 'message' => 'A random quote generator that is built with JavaScript'),
    array('title' => 'IMDb', 'link' => 'projects/concepts/imdb', 'sprite' => 'portfolio_imdb', 'message' => $alpha_str, 'status' => 1),
    // array('title' => '', 'link' => '', 'sprite' => '', 'message' => ''),
  );

  $alpha_str = 'This site is currently in alpha. There are many features missing and will contain bugs';
  $beta_str  = 'This site is currently in beta. There may be some features missing and the site may contain bugs';

  // Status Code:
  //  1 = alpha
  //  2 = beta
?>

<!-- Portfolio Section -->
<div class="ui container portfolio">
  <div class="ui horizontal divider">
    <h2><i class="write icon"></i> Portfolio <i class="write icon"></i></h2>
  </div>


  <div class="ui grid">
    <div class="doubling four column stackable stretched row">
      <?php foreach ($portfolio as $proj) { ?>
        <div class="column">
          <div class="ui rounded image viewport">
            <a href="<?php echo $proj['link']; ?>" target="_blank">
              <span class="dark-background">
                <?php echo $proj['title']; ?>
                <em><?php echo $proj['message']; ?></em>
              </span>
              <div class="icon-<?php echo $proj['sprite']; ?>"></div>
              <?php if ($proj['status'] == 1) { ?>
                <a class="ui orange ribbon label"><i class="warning icon"></i>Alpha</a>
              <?php } elseif ($proj['status'] == 2) { ?>
                <a class="ui blue ribbon label"><i class="warning icon"></i>Beta</a>
              <?php } ?>
            </a>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
