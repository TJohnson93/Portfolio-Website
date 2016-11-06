<!DOCTYPE html>

<html lang="en" charset="UTF-8">
<head>
	<title>Todd Johnson Portfolio</title>

	<?php require_once('inc/header.php'); ?>

	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="css/app-min.css">
</head>

<body>

	<?php require_once('inc/browser_checks.php'); ?>

	<div id="page">
		<?php require_once('inc/navigation.php'); ?>

		<!-- Cover Image -->
		<div class="ui cover" style="height: 500px;"></div>
		<div class="container ui content-container">

			<!-- Hidden Modals -->
			<?php require_once('inc/contact_modal.php'); ?>
			<?php require_once('inc/document_viewer.php'); ?>

			<!-- Start of Portfolio -->
			<?php require_once('inc/profile.php'); ?>
			<?php require_once('inc/portfolio.php'); ?>

			<!-- Resume Section -->
			<div class="ui stackable grid container resume">

				<!-- Left Column -->
				<div class="sixteen wide tablet eleven wide computer column">
					<?php require_once('inc/education.php'); ?>
					<?php require_once('inc/experience.php'); ?>
				</div>

				<!-- Right Column -->
				<div class="sixteen wide tablet five wide computer column">
					<?php require_once('inc/skills.php'); ?>
					<?php require_once('inc/volunteer.php'); ?>
				</div>

				<!-- Under two columns - Full width -->
				<div class="sixteen wide tablet sixteen wide computer column">
					<?php require_once('inc/certificates.php'); ?>
				</div>
			</div>
		</div>

		<div class="footer">
			Made with <i class="heart icon" style="color:red"></i> by Todd Johnson
		</div>

	</div>

	<!-- Inline Javascript -->
	<?php require_once('inc/footer.php'); ?>

</body>
</html>
