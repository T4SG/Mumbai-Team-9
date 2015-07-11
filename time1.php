<? php


$con=mysqli_connect('localhost','root','','gnsd0405') or die("error");
echo "hello";
$sql="Select preiamge,postimage from school_pre_post_detail_plu_pics";
$result=mysqli_query($con,$sql);


while($res=mysqli_fetch_array($result))
{
	
echo '<IMG HEIGHT="300" SRC="DATA:IMAGE;BASE64,'".$res['preiamge']."'><br><IMG HEIGHT="300" SRC="DATA:IMAGE;BASE64,'".$res['postimage']."'><br>';

}


?>
