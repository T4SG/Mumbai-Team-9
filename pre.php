
<!DOCTYPE HTML>
<html>
<head>
<title>School Pre Details </title>
<style>
.error {color: #FF0000;}
</style>
<link href="form1.css" rel="stylesheet">
</head>
<body>
<?php
$year1 = $tboy1 = $tgirl1 = $aid1 = $grad1 = $tenrol1 = $complit1 = $class1 = $teach1 = "";
$year_Err = $tboy_Err = $tgirl_Err = $aid_Err = $grad_Err = $tenrol_Err = $complit_Err = $class_Err = $teach_Err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["year1"])) {
     $year_Err ="Year of rebuild is required"; 
   } else {
     $year1 = test_input($_POST["year1"]);
   }
   
   if (empty($_POST["tboy1"])) {
     $tboy_Err ="Number of boys is required"; 
   } else {
     $tboy1 = test_input($_POST["tboy1"]);
   }
   
   if (empty($_POST["tgirl1"])) {
     $tgirl_Err ="Number of girls is required"; 
   } else {
     $tgirl1 = test_input($_POST["tgirl1"]);
   }

		if (empty($_POST["aid1"])) {
     $aid_Err ="Select one of the fields"; 
   } else {
     $aid = test_input($_POST["aid"]);
   }
   
   if (empty($_POST["grad1"])) {
     $grad_Err ="Number of graduates is required"; 
   } else {
     $grad1 = test_input($_POST["grad1"]);
   }

	if (empty($_POST["class1"])) {
     $class_Err ="Class is required"; 
   } else {
     $class = test_input($_POST["class"]);
   }

   if (empty($_POST["teach1"])) {
     $teach_Err ="Number of teachers is required"; 
   } else {
     $teach1 = test_input($_POST["teach1"]);
   }
   
}

$db_username="root";
$db_password="";
$database="gnsd0405";
$server="127.0.0.1";
$conn=new mysqli($server,$db_username,$db_password,$database);


if(isset($_POST['pre_submit']))
{
	$year=$_POST['year1'];
	$tboy=$_POST['tboy1'];
	$tgirl=$_POST['tgirl1'];
	$aid=$_POST['aid1'];
	$grad=$_POST['grad1'];
	$tenrol=$_POST['tenrol1'];
	$complit=$_POST['complit1'];
	$class=$_POST['class1'];
	$teach=$_POST['teach1'];
	
	print"Connection to the server opened";
	$sql="INSERT INTO School Pre details VALUES ('$year','$tboy','$tgirl','$aid','$grad','$tenrol','$complit','$class','$teach')";
    mysqli_query($conn,$sql);
	}


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>

<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method=POST>

<fieldset style="width:90%; margin:auto" >

<p>
		<label>Year of Establishment <span class="error">*</span></label>
		<input type="text" name="year1" />
		<span class="error"><?php echo $year_Err;?></span>
</p>

<p>
		<label>Total Number of boys <span class="error">*</span></label>
		<input type="text" name="tboy1" />
		<span class="error"><?php echo $tboy_Err;?></span>
</p>

<p>
		<label>Total Number of girls <span class="error">*</span></label>
		<input type="text" name="tgirl1" />
		<span class="error"><?php echo $tgirl_Err;?></span>
</p>

<p>
		<label>Aided / Unaided <span class="error">*</span></label>
		<input type="radio" name="aid1" value="0" />Aided &nbsp; &nbsp;
		<input type="radio" name="aid1" value="1" />Unaided
		<span class="error"><?php echo $aid_Err;?></span>
</p>

<p>
		<label>Number of graduates <span class="error">*</span></label>
		<input type="text" name="grad1" />
		<span class="error"><?php echo $grad_Err;?></span>
</p>
<p>
		<label>Total Number of students enrolled </label>
		<input type="text" name="tenrol1" />
</p>

<p>
		<label>Computer Literacy </label>
		<input type="text" name="complit1" />
</p>


<p>
		<label>Class <span class="error">*</span></label>
		<input type="text" name="class1" />
		<span class="error"><?php echo $class_Err;?></span>
</p>

<p>
		<label>Number of Teachers <span class="error">*</span></label>
		<input type="text" name="teach1" />
		<span class="error"><?php echo $teach_Err;?></span>
</p>

<center>
<input type="submit" name="pre_submit" value="Submit">
</center>

</fieldset>
</form>
</body>
</html>
