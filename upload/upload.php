<?php
	//Allow Headers
	header('Access-Control-Allow-Origin: *');
	//print_r(json_encode($_FILES));
	$new_image_name = urldecode($_FILES["file"]["name"]).".jpg";
	//Move your files into upload folder
	move_uploaded_file($_FILES["file"]["tmp_name"], "upload/".$new_image_name);
?>