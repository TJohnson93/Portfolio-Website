<?php
  $volunteer_work = array(
      array('organisation' => 'Beaudesert Warriors Rugby Union Club',
            'title' => 'Rugby Coach',
            'start_date' => 'Jan 2009',
            'end_date' => 'Jan 2011',
            'description' => 'In my mid teens I volunteered to coach Junior Rugby Union after
              a junior teams coach moved towns. I took on the responsibilities
              involved in teaching young players how to safely play rugby. I was
              able to teach them the ball skills and defensive skills required for
              them to progress in the later years. I made it a priority to train
              the players in a way that minimised injury and was still perform the
              many tasks required in a game of Rugby.',
            'attachments_available' => true,
            'attachments' => array(array('type' => 'Written Reference', 'src' => 'bwruc_ref')))
  )
?>

<div class="ui top attached segment">
  <h2><i class="globe icon"></i> Volunteer Work</h2>
</div>
<div class="ui attached segment">
  <div class="ui items">

    <?php foreach ($volunteer_work as $job) { ?>
      <div class="item">
        <div class="content">
          <span class="header"><?php echo $job['organisation']; ?></span>
          <div class="meta">
            <span><?php echo $job['title']; ?></span> |
            <span><?php echo $job['start_date'] . ' - ' . $job['end_date']; ?></span>
          </div>
          <div class="description">
            <p><?php echo $job['description']; ?></p>
          </div>

          <?php if ($job['attachments_available']) { ?>
            <div class="extra">
              <?php foreach ($job['attachments'] as $attachment) { ?>
                <div class="ui label">
                  <a class="documentation" href="#" data-content="<?php echo $attachment['src']; ?>">
                    View <?php echo $attachment['type'] ?>
                  </a>
                </div>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
