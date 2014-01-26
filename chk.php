<?php
header('Content-disposition: attachment; filename=upload/01-black-and-yellow.mp3');
header('Content-type: application/audio');
readfile('upload/01-black-and-yellow.mp3');
?>