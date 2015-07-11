<? php


$con=mysqli_connect('','root','code4good','gnsd0405') or die("error");
echo "hello";
$sql="Select img1,img2 from School_pre_post_detail_plu_pics";
$result=mysqli_query($sql);


while($res=mysqli_fetch_array($result))
{
	
header('Content-type: image/jpeg');
echo $res['img1'];
echo $res['img2'];

}


?>
