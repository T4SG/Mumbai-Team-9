<!DOCTYPE HTML>
<html>
<head>
<title>School Post Details </title>
<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">

<style type="text/css">

input:hover{
border-color:blue;
border-width:3px;
}


</style>


<style>
.error {color: #FF0000;}
</style>
<link href="form1.css" rel="stylesheet">
</head>
<body style="margin-top:30px;">

<!--

<?php
$year1 = $tboy1 = $tgirl1 = $aid1 = $grad1 = $tenrol1 = $complit1 = $class1 = $teach1 = "";
$year_Err = $tboy_Err = $tgirl_Err = $aid_Err = $grad_Err = $tenrol_Err = $complit_Err = $class_Err = $teach_Err = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["year1"])) {
     $year_Err ="Year of establishment is required"; 		//Year of establishment
	} else {
	   if(strlen($year1 != 4) || ($year1>=1950 && $year1<=date("Y")) )
    {
      $year_Err = "Please enter a valid year";
    }
	else{
		$year1 = test_input($_POST["year1"]);
	}
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
	$sql="INSERT INTO School Post Details VALUES ('$year','$tboy','$tgirl','$aid','$grad','$tenrol','$complit','$class','$teach')";
    mysqli_query($conn,$sql);
	}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>



<?php $_SERVER["PHP_SELF"] ?>
-->
<center><strong style="font-size:30px;font-color:black;">Post Disaster Data</strong>

<form id="contact-form" style="margin-left:10px;" action="" method=POST>

<fieldset style="width:90%; margin:auto" >


<p>
<label><span class="error">*All fileds sre required</span></label>
		</p>
<p>
		
		<input type="text" name="year1" placeholder="Year of Establshment" required/>
		<span class="error"><?php echo $year_Err;?></span>
</p>

<p>
		
		<input type="text" name="tboy1" placeholder="Total Number of boys" required/>
		<span class="error"><?php echo $tboy_Err;?></span>
</p>

<p>

		<input type="text" name="tgirl1" placeholder="Total Number of girls" required/>
		<span class="error"><?php echo $tgirl_Err;?></span>
</p>

<p>
		<input type="radio" name="aid1" value="0" />Aided &nbsp; &nbsp;
		<input type="radio" name="aid1" value="1" />Unaided
		<span class="error"><?php echo $aid_Err;?></span>
</p>

<p>
		<input type="text" name="grad1" placeholder="Number of graduates" required/>
		<span class="error"><?php echo $grad_Err;?></span>
</p>
<p>
		<input type="text" name="tenrol1" placeholder="Total Number of students enrolled" required/>
</p>

<p>
		<input type="text" name="complit1" placeholder="Computer Literacy" required/>
</p>


<p>
		<input type="text" name="class1" placeholder="Class" required/>
		<span class="error"><?php echo $class_Err;?></span>
</p>

<p>
		<input type="text" name="teach1" placeholder="Number of Teachers" required/>
		<span class="error"><?php echo $teach_Err;?></span>
</p>

<button id="btn btn-circle btn-dark"> Submit</button>


</fieldset>
</form>
</body>
</html>
