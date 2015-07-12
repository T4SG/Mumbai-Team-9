	<!DOCTYPE HTML>
	<html>
	<head>
	<title>School Infrastructure Details </title>
	<style>
	.error {color: #FF0000;}					
	</style>
	<link href="form1.css" rel="stylesheet">
	</head>
	<body>
	<?php
	$electricity1 = $sqarea1 = $playground1 = $washrooms1 = $potable_water1 = $benches1 = $tables1 = $chairs1 = $blackboards1 = $fans = $noclass = $nocomputer = $lib = $cafe = $cone = "";
	$electricity_Err = $sqarea_Err = $playground_Err = $washrooms_Err = $potable_water_Err = $benches_Err = $tables_Err	= $chairs_Err = $blackboards_Err = $fans_Err = $noclass_Err = $nocomputer_Err = $lib_Err = $cafe_Err = $cone_Err = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		if (empty($_POST["electricity1"])) {					// Electricity
		 $electricity_Err ="Field is required"; 
	   } else {
		 $electricity1 = test_input($_POST["electricity1"]);
	   }
	   
	   if (empty($_POST["sqarea1"])) {
		 $sqarea_Err ="Area is required"; 						// Area of school
	   } else {
		 $sqarea1 = test_input($_POST["sqarea1"]);
	   }
	   
	   if (empty($_POST["playground1"])) {
		 $playground_Err ="Required Field"; 					// Playground
	   } else {
		 $playground1 = test_input($_POST["playground1"]);
	   }

			if (empty($_POST["washrooms1"])) {
		 $washrooms_Err ="Field is required"; 					// Washrooms
	   } else {
		 $washrooms1 = test_input($_POST["washrooms1"]);
	   }
	   
	   if (empty($_POST["potable_water1"])) {
		 $potable_water_Err ="Field is required"; 				//Drinking Water Facility
	   } else {
		 $potable_water1 = test_input($_POST["potable_water1"]);
	   }

		if (empty($_POST["benches1"])) {
		 $benches_Err ="Field is required"; 					// No. of Benches
	   } else {
		 $benches1 = test_input($_POST["benches1"]);
	   }

	   if (empty($_POST["tables1"])) {
		 $tables_Err ="Number of tables is required"; 			// No. of Tables
	   } else {
		 $tables1 = test_input($_POST["tables1"]);
	   }
	   
	   if (empty($_POST["chairs1"])) {
		 $chairs_Err ="Number of chairs is required"; 			// No. of Chairs
	   } else {
		 $chairs1 = test_input($_POST["chairs1"]);
	   }
	   
	   if (empty($_POST["blackboards1"])) {
		 $blackboards_Err ="Number of blackboards is required"; // No. of Blackboards
	   } else {
		 $blackboards1 = test_input($_POST["blackboards1"]);
	   }
	   
	   if (empty($_POST["fans1"])) {
		 $fans_Err ="Number of fans is required"; 				// No. of Fans
	   } else {
		 $fans1 = test_input($_POST["fans1"]);
	   }
	   
	   if (empty($_POST["chairs1"])) {
		 $chairs_Err ="Number of chairs is required"; 			// No. of Chairs
	   } else {
		 $chairs1 = test_input($_POST["chairs1"]);
	   }
	   
	   if (empty($_POST["noclass1"])) {
		 $noclass_Err ="Number of classes is required"; 		// No. of classes
	   } else {
		 $noclass1 = test_input($_POST["noclass1"]);
	   }
	   
	   if (empty($_POST["nocomputer1"])) {
		 $nocomputer_Err ="Number of computers is required"; 	// No. of computers
	   } else {
		 $nocomputer1 = test_input($_POST["nocomputer1"]);
	   }
	   
	   if (empty($_POST["lib1"])) {
		 $lib_Err ="Field is required"; 						// Library Facility
	   } else {
		 $lib1 = test_input($_POST["lib1"]);
	   }
	   
	   if (empty($_POST["cafe1"])) {
		 $cafe_Err ="Select any one of the options"; 			// Cafeteria Facility
	   } else {
		 $cafe1 = test_input($_POST["cafe1"]);
	   }
	   
	   if (empty($_POST["cone1"])) {
		 $cone_Err ="Select any one of the options"; 			// Network Connection
	   } else {
		 $cone1 = test_input($_POST["cone1"]);
	   }
	}

	$db_username="root";
	$db_password="";
	$database="gnsd0405";
	$server="127.0.0.1";
	$conn=new mysqli($server,$db_username,$db_password,$database);


	
	if(isset($_POST['infra_submit']))					//infra_submit=> Submit button 
	{
		$electricity=$_POST['electricity1'];
		$sqarea=$_POST['sqarea1'];
		$playground=$_POST['playground1'];
		$washrooms=$_POST['washrooms1'];
		$potable_water=$_POST['potable_water1'];
		$benches=$_POST['benches1'];
		$tables=$_POST['tables1'];
		$chairs=$_POST['chairs1'];
		$blackboards=$_POST['blackboards1'];
		$fans=$_POST['fans1'];
		$noclass=$_POST['noclass1'];
		$nocomputer=$_POST['nocomputer1'];
		$lib=$_POST['lib1'];
		$cafe=$_POST['cafe1'];
		$cone=$_POST['cone1'];
		
		// Variables with '1' -> obtained from elements and the variables without '1' -> saving into dat5abase
		
		print"Connection to the server opened";
		$sql="INSERT INTO School Infra VALUES ('$elctricity','$sqarea','$playground','$washrooms','$potable_water','$benches','$tables','$chairs','$blackboards','$fans','$noclass','$nocomputer','$lib','$cafe','$cone')";
		mysqli_query($conn,$sql);
		}


	function test_input($data) {							//validation 
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	?>

	<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method=POST>

	<fieldset style="width:90%; margin:auto" >

	<p>
			<!--<label>Availability of Electricity <span class="error">*</span></label>
			<input type="radio" name="electricity1" value="1" />Yes &nbsp; &nbsp;
			<input type="radio" name="electricity1" value="0" />No
			<span class="error"><?php echo $electricity_Err;?></span> -->
			<label for="disabledTextInput">Avaliablity of Electricity</label>
			<label class="checkbox-inline">
			<input type="checkbox" id="inlineCheckbox1" value="option1"> Yes
  <input type="checkbox" id="inlineCheckbox1" value="option1" required> No
</label>

	</p>

	<p>
			<!--<label>Total Area <span class="error">*</span></label>
			<input type="text" name="sqarea1" />
			<span class="error"><?php echo $sqarea_Err;?></span>-->
			
			<input type="text" class="form-control" placeholder="Total Area">
			
	</p>

	<p>
			<!--<label>Is a playground available <span class="error">*</span></label>
			<input type="radio" name="playground1" value="1" />Yes &nbsp; &nbsp;
			<input type="radio" name="playground1" value="0" />No
			<span class="error"><?php echo $playground_Err;?></span>-->
			<label for="disabledTextInput">Is a playground avaliable</label>
			<label class="checkbox-inline">
			<input type="checkbox" id="inlineCheckbox1" value="option1"> Yes
  <input type="checkbox" id="inlineCheckbox1" value="option1"> No
			
	</p>
	
	
	<p>
			<!--<label>Number of Washrooms <span class="error">*</span></label>
			<input type="text" name="washrooms1" />
			<span class="error"><?php echo $washrooms_Err;?></span>-->
			
			<input type="text" class="form-control" placeholder="Washrooms">
			
	</p>
	
	
	
	<p>
			<!--<label>Drinking water availability <span class="error">*</span></label>
			<input type="radio" name="potable_water1" value="1" />Yes &nbsp; &nbsp;
			<input type="radio" name="potable_water1" value="0" />No
			<span class="error"><?php echo $potable_water_Err;?></span>-->
			<label for="disabledTextInput">Drinking water availability</label>
			<label class="radio-inline">
  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Yes
  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> No
</label>
 
	</p>
	

	<p>
			<!--<label>Number of benches <span class="error">*</span></label>
			<input type="text" name="grad1" />
			<span class="error"><?php echo $benches_Err;?></span>-->
			
			<input type="text" class="form-control" placeholder="Benches">
	</p>
	<p>
			<<!--label>Total Number of tables </label>
			<input type="text" name="tenrol1" /-->
			
			<input type="text" class="form-control" placeholder="Number of Tables">
	</p>

	<p>
			<!--<label>Total Number of chairs </label>
			<input type="text" name="chairs1" /-->
			
			<input type="text" class="form-control" placeholder="Number of Chairs">
	</p>


	<p>
			<!--<label>Blackboards <span class="error">*</span></label>
			<input type="text" name="blackboards1" />
			<span class="error"><?php echo $blackboards_Err;?></span>-->
			
			<input type="text" class="form-control" placeholder="Blackboards">
	</p>

	<p>
			<!--<label>Number of Fans <span class="error">*</span></label>
			<input type="text" name="fans1" />
			<span class="error"><?php echo $fans_Err;?></span>-->
			
			<input type="text" class="form-control" placeholder="Fans">
	</p>

	<p>
			<!--<label>Number of classes <span class="error">*</span></label>
			<input type="text" name="noclass1" />
			<span class="error"><?php echo $noclass_Err;?></span>-->
			
			<input type="text" class="form-control" placeholder="Number of Classes">
	</p>
	
	<p>
			<!--<label>Number of computers <span class="error">*</span></label>
			<input type="text" name="nocomputer1" />
			<span class="error"><?php echo $nocomputer_Err;?></span>-->
			<input type="text" class="form-control" placeholder="Number of Computers">
	</p>
	
	<p>
			<!--<label>Is a Library availabile <span class="error">*</span></label>
			<input type="radio" name="lib1" value="1" />Yes &nbsp; &nbsp;
			<input type="radio" name="lib1" value="0" />No
			<span class="error"><?php echo $lib_Err;?></span>-->
			<label for="disabledTextInput">Is a Library availabile</label>
			<label class="radio-inline">
  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Yes
  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> No
	</p>
	
	<p>
			<!--<label>Is a Cafeteria availabile <span class="error">*</span></label>
			<input type="radio" name="cafe1" value="1" />Yes &nbsp; &nbsp;
			<input type="radio" name="cafe1" value="0" />No
			<span class="error"><?php echo $cafe_Err;?></span>-->
			<label for="disabledTextInput">Is a Cafetria avaliable</label>
			<label class="radio-inline">
  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Yes
  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> No
	</p>
	
	<p>
			<!--<label>Connectivity ?  <span class="error">*</span></label>
			<input type="radio" name="cone1" value="1" />Yes &nbsp; &nbsp;
			<input type="radio" name="cone1" value="0" />No
			<span class="error"><?php echo $cone_Err;?></span>-->
			<label for="disabledTextInput">Connectivity</label>
			<label class="radio-inline">
  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Yes
  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> No
	</p>
	
	
	<center>
	<button type="button" class="btn btn-primary btn-lg active">Submit</button>
	</center>

	</fieldset>
	</form>
	</body>
	</html>
