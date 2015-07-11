<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT year FROM hff_with_without_complit';
mysql_select_db('test');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    //echo "Year :{$row['year']}  <br> ".
         "--------------------------------<br>";
		 
		 
} 
echo "Fetched data successfully\n";
mysql_close($conn);
?>
