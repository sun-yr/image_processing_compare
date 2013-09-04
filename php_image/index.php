<?php

$thumb = new Imagick();
$thumb->readImage('51a81933b53169529b000001.jpg');
$thumb->resizeImage(500, 500, Imagick::FILTER_LANCZOS, 1);
$result = $thumb->writeImage('51a81933b53169529b000001_500.jpg');
$thumb->clear();
$thumb->destroy();

if($result == 1)
  echo "ok";

?>
