<?php

	$file="../doc/resume_20150728.pdf"; //file location

		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename="Todd_Johnson_Resume.pdf"');
		header('Content-Length: ' . filesize($file));
		readfile($file);
?>
