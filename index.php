<html>
<head>
	<title>Synapse</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
	
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
  #container{

    margin-top:0px;
  }
  #home{
    width: 100%;
    height:644px;
    padding-top:50px;
    background-image: url("test2.jpg");
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
            <header>
              <a href="">Home</a>
            </header>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </section>
        </div>
        <div id="register">
          <section class="reg-main">
            <header>
              <a href="">Register</a>
            </header>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </section>

        </div>
        <div id="contact">
          <section class="contact">
            <header>
              <a href="">contact</a>
            </header>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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