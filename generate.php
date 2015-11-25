<?php
	$myfile = fopen($_POST['file_name'], "w") or die("Unable to open file!");
	$txt = $_POST['file_contents'];
	fwrite($myfile, $txt);
	fclose($myfile);
?> 