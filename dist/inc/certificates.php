<?php

  /*
  * File Name: certificates.php
  * Creation Date: 12-07-2016
  * Author: Todd Johnson
  *
  * Description:
  *   Loops through $certificates array and outputs data.
  */

  $certificates = array(  //Array containing all certificates & certifications
    array('title' => 'A+ Certification', 'company' => 'CompTIA', 'sprite' => 'badge_comptia', 'completed' => false, 'data' => 'comptia_a+', 'expiry_date' => ''),
    array('title' => 'ITIL Foundations Certification', 'company' => 'ITIL', 'sprite' => 'badge_itil_logo', 'completed' => false, 'data' => 'itil_foundations', 'expiry_date' => ''),
    array('title' => 'Six Sigma Yellow Belt Certification', 'company' => 'Yellow House', 'sprite' => 'badge_sixsigma_yellow', 'completed' => true, 'data' => 'six_sigma_yellow', 'expiry_date' => ''),
    array('title' => 'QLD Construction White Card', 'company' => 'Blue Dog Training', 'sprite' => 'badge_construction', 'completed' => true, 'data' => 'lic_white_card', 'expiry_date' => ''),
    array('title' => 'Working with Children Blue Card', 'company' => 'Queensland Government', 'sprite' => 'badge_blue_card', 'completed' => true, 'data' => 'lic_blue_card', 'expiry_date' => '8/12/2017'),
    array('title' => 'QLD RSA', 'company' => 'Best Training', 'sprite' => 'badge_rsa', 'completed' => true, 'data' => 'cert_rsa', 'expiry_date' => ''),
    // array('title' => 'Apple Certified Associate - Mac Management Basics OS X 10.10', 'company' => 'Apple', 'sprite' => 'badge_apple', 'completed' => false, 'data' => 'aca_mac_management', 'expiry_date' => ''),
    // array('title' => 'Apple Certified Associate - Mac Integrations OS X 10.10', 'company' => 'Apple', 'sprite' => 'badge_apple', 'completed' => false, 'data' => 'aca_mac_integration', 'expiry_date' => ''),
    array('title' => 'Microsoft Licensing Fundamentals', 'company' => 'Microsoft Virtual Academy', 'sprite' => 'badge_mva', 'completed' => true, 'data' => 'mva_01', 'expiry_date' => ''),
    array('title' => 'Licensing Office 2013 &amp; Office 365', 'company' => 'Microsoft Virtual Academy', 'sprite' => 'badge_mva', 'completed' => true, 'data' => 'mva_02', 'expiry_date' => ''),
    array('title' => 'Office 365 Fundamentals', 'company' => 'Microsoft Virtual Academy', 'sprite' => 'badge_mva', 'completed' => true, 'data' => 'mva_03', 'expiry_date' => ''),
    array('title' => 'Windows 7 Essentials I', 'company' => 'Microsoft eLearning', 'sprite' => 'badge_win_7', 'completed' => true, 'data' => 'ms_learn_10166', 'expiry_date' => ''),
    array('title' => 'Windows 7 Essentials II', 'company' => 'Microsoft eLearning', 'sprite' => 'badge_win_7', 'completed' => true, 'data' => 'ms_learn_10167', 'expiry_date' => ''),
    array('title' => 'Beginner Skills in Microsoft Word 2010', 'company' => 'Microsoft eLearning', 'sprite' => 'badge_ms_word', 'completed' => true, 'data' => 'ms_learn_10294', 'expiry_date' => ''),
    array('title' => 'Intermediate Skills in Microsoft Word 2010', 'company' => 'Microsoft eLearning', 'sprite' => 'badge_ms_word', 'completed' => true, 'data' => 'ms_learn_10391', 'expiry_date' => ''),
    array('title' => 'Advanced Skills in Microsoft Word 2010', 'company' => 'Microsoft eLearning', 'sprite' => 'badge_ms_word', 'completed' => true, 'data' => 'ms_learn_10392', 'expiry_date' => ''),
    array('title' => 'Beginner Skills in Microsoft Excel 2010', 'company' => 'Microsoft eLearning', 'sprite' => 'badge_ms_excel', 'completed' => true, 'data' => 'ms_learn_10296', 'expiry_date' => ''),
    array('title' => 'Intermediate Skills in Microsoft Excel 2010', 'company' => 'Microsoft eLearning', 'sprite' => 'badge_ms_excel', 'completed' => true, 'data' => 'ms_learn_10393', 'expiry_date' => ''),
    array('title' => 'Beginner Skills in Microsoft PowerPoint 2010', 'company' => 'Microsoft eLearning', 'sprite' => 'badge_ms_powerpoint', 'completed' => true, 'data' => 'ms_learn_10295', 'expiry_date' => ''),
    array('title' => 'Intermediate Skills in Microsoft PowerPoint 2010', 'company' => 'Microsoft eLearning', 'sprite' => 'badge_ms_powerpoint', 'completed' => true, 'data' => 'ms_learn_10523', 'expiry_date' => ''),
    array('title' => 'Beginner Skills in Microsoft Outlook 2010', 'company' => 'Microsoft eLearning', 'sprite' => 'badge_ms_outlook', 'completed' => true, 'data' => 'ms_learn_10293', 'expiry_date' => ''),
    array('title' => 'Intermediate Skills in Microsoft Outlook 2010', 'company' => 'Microsoft eLearning', 'sprite' => 'badge_ms_outlook', 'completed' => true, 'data' => 'ms_learn_10524', 'expiry_date' => ''),
    array('title' => 'Setting up Projects in Microsoft Project 2010', 'company' => 'Microsoft eLearning', 'sprite' => 'badge_ms_project', 'completed' => true, 'data' => 'ms_learn_10378', 'expiry_date' => ''),
    array('title' => 'Building a Project Schedule in Microsoft Project 2010', 'company' => 'Microsoft eLearning', 'sprite' => 'badge_ms_project', 'completed' => true, 'data' => 'ms_learn_10379', 'expiry_date' => ''),
    array('title' => 'Tracking and Managing Projects in Microsoft Project 2010', 'company' => 'Microsoft eLearning', 'sprite' => 'badge_ms_project', 'completed' => true, 'data' => 'ms_learn_10380', 'expiry_date' => ''),
    array('title' => 'Customising and Sharing Projects in Microsoft Project 2010', 'company' => 'Microsoft eLearning', 'sprite' => 'badge_ms_project', 'completed' => true, 'data' => 'ms_learn_10381', 'expiry_date' => ''),
    array('title' => 'Breaking the Ice with Regular Expressions', 'company' => 'Code School', 'sprite' => 'badge_regex', 'completed' => true, 'data' => 'cs_regex', 'expiry_date' => ''),
    array('title' => 'Try Git', 'company' => 'Code School', 'sprite' => 'badge_try_git', 'completed' => true, 'data' => 'cs_try_git', 'expiry_date' => ''),
    array('title' => 'Try SQL', 'company' => 'Code School', 'sprite' => 'badge_try_sql', 'completed' => true, 'data' => 'cs_try_sql', 'expiry_date' => ''),
    // array('title' => '', 'company' => '', 'sprite' => '', 'completed' => true, 'data' => '', 'expiry_date' => ''),

  );

?>

<div class="ui basic segment certs">
  <div class="ui horizontal divider">
    <h2>
      <i class="certificate icon"></i>
      Certificates <span class="hide_mobile">/ Certifications</span>
      <i class="certificate icon"></i>
    </h2>
  </div>

  <div class="ui doubling four column stackable grid badges">
    <div class="stretched row">

      <?php foreach ($certificates as $certificate) { ?>

        <div class="column documentation" data-content="<?php echo $certificate['data']; ?>">
          <div class="ui segment badge">
            <?php if (!$certificate['completed']) { ?>
              <div class="ui active dimmer">
                <div class="ui medium text loader">Obtaining Qualification</div>
              </div>
            <?php } ?>
            <div class="ui circular image icon-<?php echo $certificate['sprite'] ?> badge_image"></div>
            <p><strong><?php echo $certificate['title']; ?></strong></p>
            <p><?php echo $certificate['company']; ?></p>
            <?php if ($certificate['expiry_date'] != '') { ?>
              <p>Expiry: <?php echo $certificate['expiry_date'] ?></p>
            <?php } ?>
          </div>
        </div>
      <?php } ?>

    </div>
  </div>
</div>
