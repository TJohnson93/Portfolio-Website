<?php

	$file="../doc/resume.pdf"; //file location

		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename="Todd_Johnson_Resume.pdf"');
		header('Content-Length: ' . filesize($file));
		readfile($file);
?>
