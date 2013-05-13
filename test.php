<?php
include('phpqrcode.php');
header ("Content-Type: image/gif");
QRcode::png('http://r.locb.it/control/asdf',false, false, 8, 0); // creates file 

?>
