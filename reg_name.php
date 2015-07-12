<!DOCTYPE HTML>
<html>
<head>
<title>Registration Form</title>
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
	
	if (empty($_POST["school_name"])) {						//School Name
     $school_name_Err ="School Name is required"; 
   } else {
     $school_name = test_input($_POST["school_name"]);
   }
	
	if (empty($_POST["location"])) {
     $location_Err ="Location is required"; 				//Location
   } else {
     $location_name = test_input($_POST["location"]);
   }
	
	if (empty($_POST["country"])) {
     $country_Err ="Country is required"; 					//Country
   } else {
     $country_name = test_input($_POST["country"]);
   }
	
	if (empty($_POST["contact_person"])) {
     $contact_person_Err = "Contact Person is required";	//Contact Person
   } else {
     $contact_person = test_input($_POST["contact_person"]);
     if (!preg_match("/^[a-zA-Z ]*$/",$contact_person)) {
       $contact_person_Err = "Only letters and white space allowed";
     }
   }
	 if(empty($_POST["contact"])) {
     $contact_Err = "Contact No. is required";				//Contact Number
   } else {
	   if (is_numeric($contact)){
     $contact = test_input($_POST["contact"]);
	   }
      else{
       $contact_Err = "Enter a valid Contact number";
     }
   }
   
   
   if (empty($_POST["username"])) {
     $username_Err ="Username is required"; 				//Username
   } else {
     $username = test_input($_POST["username"]);
   }
   if (empty($_POST["password"])) {							//Password
     $password_Err = "Password is required";
   } else {
     $password = test_input($_POST["password"]);
     if (!preg_match_all('$\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$',$password)) {
       $password_Err = "Invalid password";
     }
   }
   
   
   if (empty($_POST["gov_private"])) {
     $gov_private_Err ="Select one of the options"; 		//Government / Private
   } else {
     $gov_private = test_input($_POST["gov_private"]);
   }
   
   if(empty($_POST["email"])) {
	   $email_Err = "Email id required";					// Email id
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
	// variables with '1' -> values into database & variables without '1' -> data from elements
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
		<input type="text" class="form-control" placeholder="Name of School">
</p>
<p>
		<input type="text" class="form-control" placeholder="Location">
</p>
<p>
		<input type="text" class="form-control" placeholder="Country">
<p>
		<input type="text" class="form-control" placeholder="Contact Person">
</p>
<p>
		<l<input type="text" class="form-control" placeholder="Contact No">
</p>
<p>
		<input type="text" class="form-control" placeholder="Username">
</p>
<p>
		<input type="text" class="form-control" placeholder="Password">
</p>
<p>
	<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
    Government
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
    Private
  </label>
</div>
</p>

<p>
		<input type="text" class="form-control" placeholder="Email">
</p>


<center>
<input type="submit" name="reg_submit" value="Submit" onclick="alert("Thank You for Registering!");">
</center>
</fieldset>
</body>
</html>

