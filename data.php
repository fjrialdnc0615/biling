<?php
	echo "test";
	if(isset($_POST['filename']))
  		$filename = $_POST['filename'];
  	else exit;
	if(isset($_POST['data']))
  		$data = $_POST['data'];
  	else exit;
	$file=fopen("$filename","w");
	fwrite($file,$data);
	fclose($file);
?>