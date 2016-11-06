<?php
	if(isset($_POST['doc']) && $_POST['doc'] != '' && !empty($_POST['doc']))
		$target_document = $_POST['doc'];
	else
		$target_document = 'no data parsed';

  // contains note to explain damaged documents to user
  $note = '<strong>NOTE:</strong> I apologise for the quality of this document, unfortunately, I experienced a serious motovehicle accident and the original document was damaged. Whilst I have improved the quality a bit via Adobe Photoshop, please be assured that the content of the document was not altered in any way.';
	$info_obtaining = "I am currently working to obtain this certification.";
	$info_obtained = "I have successfully obtained this certification.";

  $documents = array(
      // Certifications
      'aca_mac_management' => array('title' => 'Apple Certified Associate - Mac Management 10.10', 'file' => 'certs/aca_mac_management.png', 'info' => $info_obtaining),
      'aca_mac_integration' => array('title' => 'Apple Certified Associate - Mac Integration 10.10', 'file' => 'certs/aca_mac_integration.png', 'info' => $info_obtaining),
      'comptia_a+' => array('title' => 'CompTIA A+', 'file' => 'certs/comptia_a+.png', 'info' => $info_obtaining),
      'itil_foundations' => array('title' => 'ITIL Foundations', 'file' => 'certs/itil_foundations.png', 'info' => $info_obtaining),
      'six_sigma_yellow' => array('title' => 'Six Sigma Yellow Belt', 'file' => 'certs/cert_six_sigma_yellow.jpg', 'info' => $info_obtained),

      // Badges
      'cs_regex' => array('title' => 'Breaking the Ice with Regular Expressions', 'file' => 'certs/badge_regex.png', 'info' => 'A CodeSchool acheivement the their course: <strong>Breaking the Ice with Regular Expressions</strong>.'),
      'cs_try_git' => array('title' => 'Try Git', 'file' => 'certs/badge_try_git.png', 'info' => 'A CodeSchool acheivement the their course: <strong>Try Git</strong>.'),
      'cs_try_sql' => array('title' => 'Try SQL', 'file' => 'certs/badge_try_sql.png', 'info' => 'A CodeSchool acheivement the their course: <strong>Try SQL</strong>.'),
      'cs_sequel_sql' => array('title' => 'Sequel to SQL', 'file' => '', 'info' => 'I am currently working to obtain this certification.'),

      // Certificates
      'lynda_01' => array('title' => 'Customer Service Fundamentals', 'file' => 'certs/lynda_certificate_customer_service_fundamentals.png', 'info' => $info_obtained),
      'qld_health_appreciation' => array('title' => 'eHealth Queensland - Certificate of Appreciation', 'file' => 'certs/cert_appreciation_qld_health.png', 'info' => $info_obtained),
      'cc_mystery_shopper' => array('title' => 'Mystery Shopper Award', 'file' => 'certs/achievement_cash_converters_mystery_shopper.png', 'info' => 'Whilst working at Cash Converters, I had to perform at a certain standard at all times, regardless of the customer I was serving at the time. Often Cash Converters would entertain a Mystery Shopper to ensure that staff were upholding these standards. I received a well above average score of 94% whilst working in the Buys & Loans Dept.'),
      'cert_rsa' => array('title' => 'Responsible Service of Alcohol', 'file' => 'certs/cert_rsa.png', 'info' => $info_obtained),
      'cert_gcit_diploma' => array('title' => 'Diploma of Information Technology (Software Development)', 'file' => 'certs/degree_gcit_diploma.jpg', 'info' => $info_obtained),
      'cert_gcit_diploma_transcript' => array('title' => 'Diploma of Information Technology (Software Development) Transcript', 'file' => 'certs/degree_gcit_diploma_transcript.jpg', 'info' => $info_obtained),
      'mva_01' => array('title' => 'Microsoft Virtual Academy Certificate', 'file' => 'certs/cert_mva_microsoft_licensing_fundamentals.jpg', 'info' => $info_obtained),
      'mva_02' => array('title' => 'Microsoft Virtual Academy Certificate', 'file' => 'certs/cert_mva_licensing_office_2013_and_office_365.jpg', 'info' => $info_obtained),
      'mva_03' => array('title' => 'Microsoft Virtual Academy Certificate', 'file' => 'certs/cert_mva_office_365_fundamentals.png', 'info' => $info_obtained),
      'ms_learn_10166' => array('title' => 'Windows 7 Essentials I', 'file' => 'certs/cert_ms_learning_10166.jpg', 'info' => $info_obtained),
      'ms_learn_10167' => array('title' => 'Windows 7 Essentials II', 'file' => 'certs/cert_ms_learning_10167.jpg', 'info' => $info_obtained),
      'ms_learn_10293' => array('title' => 'Beginner Skills in Outlook 2010', 'file' => 'certs/cert_ms_learning_10293.jpg', 'info' => $info_obtained),
      'ms_learn_10294' => array('title' => 'Beginner Skills in Microsoft Word 2010', 'file' => 'certs/cert_ms_learning_10294.jpg', 'info' => $info_obtained),
      'ms_learn_10295' => array('title' => 'Beginner Skills in Microsoft PowerPoint 2010', 'file' => 'certs/cert_ms_learning_10295.jpg', 'info' => $info_obtained),
      'ms_learn_10296' => array('title' => 'Beginner Skills in Microsoft Excel 2010', 'file' => 'certs/cert_ms_learning_10296.jpg', 'info' => $info_obtained),
      'ms_learn_10378' => array('title' => 'Setting Up Projects in Microsoft Project 2010', 'file' => 'certs/cert_ms_learning_10378.jpg', 'info' => $info_obtained),
      'ms_learn_10379' => array('title' => 'Building a Project Schedule in Microsoft Project 2010', 'file' => 'certs/cert_ms_learning_10379.jpg', 'info' => $info_obtained),
      'ms_learn_10380' => array('title' => 'Tracking and Managing Projects in Microsoft Project 2010', 'file' => 'certs/cert_ms_learning_10380.jpg', 'info' => $info_obtained),
      'ms_learn_10381' => array('title' => 'Customizing and Sharing Projects in Microsoft 2010', 'file' => 'certs/cert_ms_learning_10381.jpg', 'info' => $info_obtained),
      'ms_learn_10391' => array('title' => 'Intermediate Skills in Microsoft Word 2010', 'file' => 'certs/cert_ms_learning_10391.jpg', 'info' => $info_obtained),
      'ms_learn_10392' => array('title' => 'Advanced Skills in Microsoft Word 2010', 'file' => 'certs/cert_ms_learning_10392.jpg', 'info' => $info_obtained),
      'ms_learn_10393' => array('title' => 'Intermediate Skills in Microsoft Excel 2010', 'file' => 'certs/cert_ms_learning_10393.jpg', 'info' => $info_obtained),
      'ms_learn_10523' => array('title' => 'Intermediate Skills in Microsoft PowerPoint 2010', 'file' => 'certs/cert_ms_learning_10523.jpg', 'info' => $info_obtained),
      'ms_learn_10524' => array('title' => 'Intermediate Skills in Microsoft Outlook 2010', 'file' => 'certs/cert_ms_learning_10524.jpg', 'info' => $info_obtained),

      // References
      'bwruc_ref' => array('title' => 'Written Reference - Jim Logan', 'file' =>'docs/reference_jim_logan.png', 'info' => 'Lorem Ipsum', 'note' => $note),
      'home_ref' => array('title' => 'Written Reference - Peter Turner', 'file' =>'docs/reference_peter_turner.png', 'info' => 'Lorem Ipsum', 'note' => $note),
      'subway_ref' => array('title' => 'Written Reference - Karla Lee', 'file' =>'docs/reference_karla_lee.png', 'info' => 'Lorem Ipsum', 'note' => $note),
      'bshs_ref' => array('title' => 'Written Reference - D.N Wakefield', 'file' =>'docs/reference_d_n_wakefield.png', 'info' => 'Lorem Ipsum', 'note' => $note),
      'gcit_ref' => array('title' => 'Written Reference - Bob James', 'file' =>'docs/reference_bob_james.png', 'info' => 'Lorem Ipsum', 'note' => $note),

      // Licenses
      'lic_white_card' => array('title' => 'License - QLD Construction White Card', 'file' =>'certs/license_construction_white_card.jpeg', 'info' => $info_obtained)
    );
?>


	<!-- Document Viewer -->
  <div class="header">
    <?php echo $documents[$target_document]['title']; ?> <em style="font-size:0.65em;color:#aaa">- Click image to enlarge.</em>
  </div>
  <!-- <?php $imageSize = getimagesize('../img/' . $documents[$target_document]['file']); ?>
  <div class="content" height="<?php echo $imageSize[1]; ?>px"> -->
  <div class="image content">
    <div class="ui medium image">
      <?php if(!file_exists('../img/' . $documents[$target_document]['file']) ||
          $documents[$target_document]['file'] == null || $documents[$target_document]['file'] == ''){
            echo 'No document uploaded... Please check back later';
        } else { ?>
        <a href="img/<?php echo $documents[$target_document]['file']; ?>" target="_blank">
          <img src="img/<?php echo $documents[$target_document]['file']; ?>">
        </a>
      <?php } ?>
    </div>
     <!-- <div class="description">
      <div class="ui header"><?php echo $documents[$target_document]['title']; ?></div>
      <div class="document_description">
				<?php if(array_key_exists('note', $documents[$target_document])){ ?>
	        <p><?php echo $documents[$target_document]['note']; ?> </p>
        <?php } ?>
        <p><?php echo $documents[$target_document]['info']; ?></p>
      </div>
    </div> -->
  </div>
  <div class="actions">
    <div class="ui right labeled icon green deny button">
      Looks Good
      <i class="checkmark icon"></i>
    </div>
  </div>
