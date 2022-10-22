<?php
session_start();
$rand_num=rand(11111,99999);
$_SESSION['CODE']=$rand_num;
$layer=imagecreatetruecolor(70,40);
$captcha_bg=imagecolorallocate($layer,14, 38, 52);
imagefill($layer,0,0,$captcha_bg);
$captcha_text_color=imagecolorallocate($layer,230,230,230);
imagestring($layer,15,15,12,$rand_num,$captcha_text_color);
header('Content-Type:image/jpeg');
imagejpeg($layer);
?>