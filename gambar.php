<?php
	session_start();

	$captcha = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 5);
	$_SESSION['captcha'] = $captcha;

	$uk = ImageCreate(100, 30);
	$bg = ImageColorAllocate($uk, 238, 108, 77);
	$kd = ImageColorAllocate($uk, 255, 255, 255);

	ImageFilledRectangle($uk, 0, 0, 80, 35, $bg);
	ImageString($uk, 25, 30, 7, $captcha, $kd);
	ImageJPEG($uk);
?>