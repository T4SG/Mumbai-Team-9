<?php

$conn = mysqli_connect('','root','code4good','gnsd0405');
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
//echo hello;
$sql = 'SELECT * FROM economic_imp';

$retval = mysqli_query($conn, $sql );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
{
    echo "Average house income :".$row['avg_houseincm']."  <br> ";
	echo "Cost per child :".$row['cost_perchild']."  <br> ";
	echo "Year :".$row['year']."  <br> ";
		 
		 
		 
} 
echo "Fetched data successfully\n";
mysqli_close($conn);
?>
