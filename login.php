<!DOCTYPE HTML>
<html>
<head>
<title>Login </title>
<style>
.error {color: #FF0000;}
</style>
<link href="form1.css" rel="stylesheet">
</head>


<body>
<?php
$username_Err = $password_Err = $re_password_Err = "";
$username = $password = $re_password = "";
?>


<br><br><br><br>
<div id="Login">
<fieldset style="width:50%; margin:auto" ><legend><b>Login</b></legend>
<form method="POST"><br>


<p>		
		<label>Username: <span class="error">*</span></label> 
		<input type="text" name="username" />
		<span class="error"><?php echo $username_Err;?></span>
</p>
<p>		
		<label>Password: <span class="error">*</span></label> 
		<input type="password" name="password" />
		<span class="error"><?php echo $password_Err;?></span>
</p>

<center>
<input type="submit" name="submit_login" value="Login">
<input type="submit" name="submit_registration" value="Register">
<input type="button" name="cancel" value="Cancel">
</center>


</form>
</fieldset>
</div>
</body>
</html>
