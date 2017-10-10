<?php
if($_POST['email'] != ''){
	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    	$fileopen = fopen("../data-landing/file.txt", "a+");
		$write = $_POST['email']."\r\n";
		fwrite($fileopen, $write);
		fclose($fileopen);
		echo 'Your request is accepted.';
	}
	else{
		echo '<span style="color:#e64949;">Your email is incorrect.</span>';
	}
}
else{
	header('Location: /');
	exit;
}
?>