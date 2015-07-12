<?php

$conn = mysqli_connect('','root','code4good','gnsd0405');
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
//echo hello;
$sql = 'SELECT * FROM hff_with_without_complit';

$retval = mysqli_query($conn, $sql );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
{

   echo "Year :".$row['year']."  <br> "."Without HHF".$row['without']."<br>"."With HHF"."$row['with']."<br>".$row['std']."<br>--------------------------------<br>";
		 
		 
		 
} 
echo "Fetched data successfully\n";
mysqli_close($conn);
?>
