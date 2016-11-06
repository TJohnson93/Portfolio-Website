<?php
  $courses = array(
    array('course' => 'Diploma of Information Technology (Software Development)',
          'institute' => 'Gold Coast Institute of Tafe',
          'start_date' => '2012',
          'end_date' => '2012',
          'sprite' => 'logo_tafe_gold_coast',
          'tags' => array(array('icon' => 'globe', 'text' =>'Nationally Recognised')),
          'attachment_available' => true,
          'attachments' => array(array('type' => 'Diploma', 'src' => 'cert_gcit_diploma'),
                                 array('type' => 'Transcript', 'src' => 'cert_gcit_diploma_transcript'),
                                //  array('type' => 'Written Reference', 'src' => 'gcit_ref')
                               )),
    // array('course' => 'Full Stack Web Development',
    //       'institute' => 'Free Code Camp',
    //       'start_date' => '2015',
    //       'end_date' => '2016',
    //       'img_src' => 'img/gctafe_logo_lrg.png',
    //       'tags' => array(array('icon' => 'law', 'text' =>'Non-Profit Cause'))),
  );

?>

<!-- Education Section -->
<div id="education" class="ui top attached segment">
  <h2><i class="student icon"></i> Education</h2>
</div>
<div class="ui attached segment">
  <div class="ui divided items">

    <?php foreach ($courses as $course) { ?>
      <div class="item">
        <div class="image">
          <!-- <img class="edu_logo_custom" src="<?php //echo $course['img_src']; ?>" height="100" width="100"> -->
          <div class="edu_logo_custom icon-<?php echo $course['sprite']; ?>"></div>
        </div>
        <div class="content">
          <span class="header"><?php echo $course['course']; ?></span>
          <div class="meta">
            <span class="institute"><?php echo $course['institute']; ?></span> |
            <span class="dates"><?php echo $course['start_date'] . ' - ' . $course['end_date'];?></span>
          </div>
          <div class="description"></div>
          <div class="extra">

            <?php foreach ($course['tags'] as $tag) { ?>
              <div class="ui label">
                <i class="<?php echo $tag['icon'] ?> icon"></i> <?php echo $tag['text']; ?>
              </div>
            <?php } ?>

            <?php if ($course['attachment_available']){ ?>
              <?php foreach ($course['attachments'] as $attachment) {?>
                <div class="ui label doc-viewer">
                  <a class="documentation" href="#" data-content="<?php echo $attachment['src']; ?>">
                    View <?php echo $attachment['type'];?>
                    <div class="ui small inline loader"></div>
                  </a>
                </div>
              <?php } ?>
            <?php }  ?>

          </div>
        </div>
      </div>

    <?php } ?>

  </div>
</div>
