<!DOCTYPE html>

<html lang="en" charset="UTF-8">
<head>
	<title>Todd Johnson Portfolio</title>

	<?php require_once('inc/header.php'); ?>

	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="css/ribbons.css">
	<link rel="stylesheet" type="text/css" href="css/app-min.css">
	<link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
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
