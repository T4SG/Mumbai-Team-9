<?php
$db_username="root";
$db_password="";
$database="gnsd0405";
$server="127.0.0.1";
mysql_connect($server,$db_username,$db_password,$database);
mysql_select_db("select * from images");
$res=mysql_query(select * from images);
echo "<Tables>";
while (($row=mysql_fetch_array($res))) {
	echo "<tr>";
	echo "<td>"; ?>
	<img arc = "<? php echo $row[Imid]" ?> height="100" width = "100">
	<? php echo "</td>";
	echo "<td>"; echo "</td>";
	echho "</tr>";
}
echo "</table>";
	# code...
}
?>
