<?php
  $general_skills = array('Customer Service', 'Loyal', 'Independant', 'Determined',
    'Quick Learner', 'Communication', 'Punctual', 'Time Management', 'Management');

  $technical_skills = array('HTML', 'CSS', 'Sass', 'Less', 'JavaScript', 'jQuery',
    'Bootstrap', 'Semantic-UI', 'MySQL', 'SQLite', 'MS SQL', 'Grunt', 'Digital Ocean', 'MS Office',
    'MS Office 365', 'MS Exchange', 'MS SQL Server', 'Apple iOS', 'Apple OS X',
    'Windows 7', 'Windows 8', 'Windows 10', 'Virtualisation', 'Exchange Server',
    'Troubleshooting',)

?>

<!-- Skills Section -->
<div class="ui top attached segment">
  <h2><i class="lab icon"></i> My Top Skills</h2>
</div>
<div class="ui attached segment">
  <div class="ui divided items">
    <!-- General -->
    <div class="ui horizontal divider">General</div>
    <?php foreach ($general_skills as $skill) { ?>
      <a class="ui tag label"><?php echo $skill; ?></a>
    <?php } ?>

    <!-- Technical -->
    <div class="ui horizontal divider">Technical</div>
    <?php foreach ($technical_skills as $skill) { ?>
      <a class="ui tag label"><?php echo $skill; ?></a>
    <?php } ?>
  </div>
</div>
