<?php
$uname=$_POST['un'];
$upass=$_POST['upass'];

$con=mysqli_connect("http://ec2-52-74-27-3.ap-southeast-1.compute.amazonaws.com/phpmyadmin/index.php?token=e64cc7dd1b99cbbe802872643c77ac3f#PMAURL-2:sql.php?db=gnsd0405&table=Login&server=1&target=&token=e64cc7dd1b99cbbe802872643c77ac3f","root","code4good","gnsd0405") or die("error");

$sql=$con->prepare("Select count(*) from Login where username=? and pwd=?");
$sql->bind-param("ss",$uname,$upass);
$sql->execute();

echo "hello";
?>