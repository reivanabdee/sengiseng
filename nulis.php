<?php
// (A) OPEN IMAGE
$img = imagecreatefromjpeg("kosong.jpg");

// (B) WRITE TEXT ID
$id = "7400";
$pt = "/ 12-34567";
$bulan = "/ I/";
$tahun = " 2022";
// end ID


//text2 
$tanggal = "14";
$bulan2 = " Januari";
// ebd text2 


//text create
$tanggal3 = "07";
$bulan3 = " Januari";


$txt = "$id$pt$bulan$tahun";
$txt2 = "$tanggal$bulan2$tahun";
$txt3 = "$tanggal3$bulan3$tahun";

$fontFile = "arialbd.ttf"; // CHANGE TO YOUR OWN!

//font kedua
$fontFile2 = "arial.ttf";
// end font//

$fontSize = 35;
$fontSize2 = 37.5;
$fontSize3 = 35;
$fontColor = imagecolorallocate($img, 66, 83, 68);

//bagian pertama 
$posX = 951;//955;
$posY = 975;
$angle = 0;
//bagian kedua 
$posX2 = 990;//955;
$posY2 = 2150;
$angle2= 0;

$posX3 = 1867.5;
$posY3 = 2846;
$angle3= 0;

imagettftext($img, $fontSize, $angle, $posX, $posY, $fontColor, $fontFile, $txt);
imagettftext($img, $fontSize2, $angle2, $posX2, $posY2, $fontColor, $fontFile2, $txt2);
imagettftext($img, $fontSize3, $angle3, $posX3, $posY3, $fontColor, $fontFile2, $txt3);



// (C) OUTPUT IMAGE
// (C1) DIRECTLY SHOW IMAGE
header("Content-type: image/jpeg");
imagejpeg($img);


// (C2) OR SAVE TO A FILE
imagecopy($img, $img, 0, 140, 0, 0, imagesx($img), imagesy($img));
imagejpeg($img, "demo.jpg", 100);
imagedestroy($img);
