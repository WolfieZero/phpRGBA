<?php

	// Create a 1x1 image
	$img = imagecreate(1, 1);
	
	// http://us.php.net/manual/en/function.imagecolorallocatealpha.php
	$bg = imagecolorallocatealpha ($img, $_GET['r'], $_GET['b'], $_GET['b'], $_GET['a']);
	
	// Write the string at the top left
	imagefill($img, 0, 0, $bg);
	
	header ('Content-type: image/png');
	imagepng($img);
	imagedestroy($img);

?>