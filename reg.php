<!DOCTYPE HTML>
<html>
<head>
<title>Registration </title>
<style>
.error {color: #FF0000;}
</style>
<link href="form1.css" rel="stylesheet">
</head>
<body>

<?php
$school_name = $location = $country = $contact_person = $contact = $username = $password = $gov_private = $email = "";
$school_name_Err = $location_Err = $country_Err = $contact_person_Err = $contact_Err = $username_Err = $password_Err = $gov_private_Err = $email_Err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["school_name"])) {
     $school_name_Err ="School Name is required"; 
   } else {
     $school_name = test_input($_POST["school_name"]);
   }
	
	if (empty($_POST["location"])) {
     $location_Err ="Location is required"; 
   } else {
     $location_name = test_input($_POST["location"]);
   }
	
	if (empty($_POST["country"])) {
     $country_Err ="Country is required"; 
   } else {
     $country_name = test_input($_POST["country"]);
   }
	
	if (empty($_POST["contact_person"])) {
     $contact_person_Err = "Contact Person is required";
   } else {
     $contact_person = test_input($_POST["contact_person"]);
     if (!preg_match("/^[a-zA-Z ]*$/",$contact_person)) {
       $contact_person_Err = "Only letters and white space allowed";
     }
   }

	 if(empty($_POST["contact"])) {
     $contact_Err = "Contact No. is required";
   } else {
	   if (is_numeric($contact)){
     $contact = test_input($_POST["contact"]);
	   }
      else{
       $contact_Err = "Enter a valid Contact number";
     }
   }
   
   if (empty($_POST["location"])) {
     $location_Err ="Location is required"; 
   } else {
     $location_name = test_input($_POST["loation"]);
   }
   
   
   if (empty($_POST["username"])) {
     $username_Err ="Username is required"; 
   } else {
     $username = test_input($_POST["username"]);
   }

   if (empty($_POST["password"])) {
     $password_Err = "Password is required";
   } else {
     $password = test_input($_POST["password"]);
     if (!preg_match_all('$\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$',$password)) {
       $password_Err = "Invalid password";
     }
   }
   
   
   if (empty($_POST["gov_private"])) {
     $gov_private_Err ="Select one of the options"; 
   } else {
     $gov_private = test_input($_POST["gov_private"]);
   }
   
   if(empty($_POST["email"])) {
	   $email_Err = "Email id required";
   } else {
	   $email = test_input($_POST["email"]);
	   if(!filter_var($email,FILTER_VALIDATE_EMAIL))	{
		   $email_Err = "Invalid email format";
	   
	   }
   }
   
   
}




$db_username="root";
$db_password="";
$database="gnsd0405";
$server="127.0.0.1";
$conn=new mysqli($server,$db_username,$db_password,$database);
if(isset($_POST['reg_submit']))
{
	$school_name1=$_POST['school_name'];
	$location1=$_POST['location'];
	$country1=$_POST['country'];
	$contact_person1=$_POST['contact_person'];
	$contact1=$_POST['contact'];
	$username1=$_POST['username'];
	$password1=$_POST['password'];
	$gov_private1=$_POST['gov_private'];
	$email1=$_POST['email'];
	
	print"Connection to the server opened";
	$sql="INSERT INTO reg VALUES ('$school_name1','$location1','$country1','$contact_person1','$contact1','$username1','$password1','$gov_private1','$email1')";
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
		<label>Name of the school <span class="error">*</span></label>
		<input type="text" name="school_name" />
		<span class="error"><?php echo $school_name_Err;?></span>
</p>
<p>
		<label>Location <span class="error">*</span></label>
		<input type="text" name="location" />
		<span class="error"><?php echo $location_Err;?></span>
</p>
<p>
		<label>Country <span class="error">*</span></label>
		<input type="text" name="country" />
		<span class="error"><?php echo $country_Err;?></span>
</p>
<p>
		<label>Contact Person <span class="error">*</span></label>
		<input type="text" name="contact_person" />
		<span class="error"><?php echo $contact_person_Err;?></span>
</p>
<p>
		<label>Contact No. <span class="error">*</span></label>
		<input type="text" name="contact" />
		<span class="error"><?php echo $contact_Err;?></span>
</p>
<p>
		<label>Username <span class="error">*</span></label>
		<input type="text" name="username" />
		<span class="error"><?php echo $username_Err;?></span>
</p>
<p>
		<label>Password <span class="error">*</span></label>
		<input type="password" name="password" />
		<span class="error"><?php echo $password_Err;?></span>
</p>
<p>
		<label>Government / Unaided <span class="error">*</span></label>
		<input type="radio" name="gov_private" value="0" />Government &nbsp; &nbsp; &nbsp;
		<input type="radio" name="gov_private" value="1" />Private
		<span class="error"><?php echo $gov_private_Err;?></span>
</p>

<p>
		<label>Email Id <span class="error">*</span></label>
		<input type="email" name="email" />
		<span class="error"><?php echo $email_Err;?></span>
</p>


<center>
<input type="submit" name="reg_submit" value="Submit">
</center>
</fieldset>
</body>
</html>


