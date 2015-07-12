
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
     if(!filter_var($email,FILTER_VALIDATE_EMAIL))  {
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
<html>
<head>
	<title>HappyHeartsFoundation</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
	
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
  #container{

    margin-top:0px;
  }


.error {color: #FF0000;}
.navbar-fixed-top{

}
.brandImage{
  top: -10px;
}
.navbar-brand {
  float: left;
  height: 50px;
  padding: 0px 0px;
  font-size: 18px;
  line-height: 20px;
}

  #home{
    width: 100%;
    height:644px;
    padding-top:50px;

    

  }
  .navbar {
  position: relative;
  min-height: 50px;
  margin-bottom:0px;
  border: 1px solid transparent;
}
#register{
    width: 100%;
    height:644px;
    padding-top:50px;
  }
  .home-main{
    width:100%;
    height:auto;
    position:float; 
  }
  .navbar-fixed-top{
  
  }
  .row {
   margin-right:0px; 
  margin-left: -15px;
}
.login{
    width: 100%;
    height:644px;
    padding-top:50px;
  }
.contact{
    width: 100%;
    height:644px;
    padding-top:50px;
  }
.about{
    width: 100%;
    height:644px;
    padding-top:50px;
  }
  </style>

  <style>
.error {color: #FF0000;}
</style>

  <script  src="js/myscript.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });
    if (window.matchMedia('(max-width:768px) and (min-width:200px)').matches)
    {
      $('ul.nav').on('click',function(){
        $("#mynavbar").removeClass("in");

      });

    }
});
  </script>
</head>
<body id="index">
   <?php include "header.php";?>
  <section id="container">
    <div class="content row">
      <section class="main col col-lg-12">
       
        <div id="home">
          <section class="home-main">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="happyHearts.jpg" alt="...">
    </div>
    </div>
  </div>
 
  <!-- Controls -->
</div> <!-- Carousel -->
          </section>
        </div>
        <div id="register">
          <section class="reg-main">
            <header>
              <a href="">Register</a>
            </header>
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
<input type="submit" name="reg_submit" value="Submit" onclick="alert("Thank You for Registering!");">
</center>
</fieldset>
          </section>

        </div>
        <div id="contact">
          <section class="contact">
            
            
           <aside style="float:left">
              <a class="twitter-timeline" href="https://twitter.com/search?q=%40HappyHeartsFund" data-widget-id="620106178526347264">Tweets about @HappyHeartsFund</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
           </aside>
           <div id="fb" style="float:right";>
            <section class="main row">
             <a href=" https://api.import.io/store/data/0afb46e0-e535-47ae-8ca6-5e780765baae/_query?input/webpage/url=http%3A%2F%2Fhappyheartsfund.org%2F&_user=4f23d6e8-1c82-4d04-b8fd-a1e6d14ab25b&_apikey="></a>
            </section>
      <section class="facebook-notifications ">
        <div class="fbn panel panel-default bootcards-media">
          <div class="fbnbody panel-body">
              <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <div class="fb-page" data-href="https://www.facebook.com/happyheartsfund" data-height="600" data-width="229px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/tsec.synapse"><a href="https://www.facebook.com/tsec.synapse">TSEC Synapse</a></blockquote></div></div>
          </div>
       </div>
      </section>
    </div>
  </section>
  </aside>
          </section>

        </div>
        <div id="login">
          <section class="login">
            <header>
              <a href="">login</a>
            </header>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </section>
        </div>
        <div id="about">
          <section class="about">
            <header>
              <a href="">about</a>
            </header>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </section>

        </div>

      </section>
    </div>
  </section>				
</body>

</html>


