<?php 
include"VideoStream.php";

$stream=new VideoStream('$fileLocation');// in here you should write thr path and file name


$stream->start();


?>