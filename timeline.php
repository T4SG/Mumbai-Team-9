<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title>HHF-Timeline</title>
</head>
<body style="margin-top:50px;">
<center><Strong style="color:black;font-size:30px;">Timeline</strong></center>
	<section id="cd-timeline" class="cd-container">


	<div class="cd-timeline-content" >
				<h2>Pre-Disaster Situation</h2>
</div>

	<div class="cd-timeline-content" style="margin-top:-70px;float:right;">
				<h2>Post-Disaster Situation</h2>
</div>


<?php

						$con=mysqli_connect('localhost','vikas','vikas','gnsd0405') or die("error");
						$result=mysqli_query($con,"Select * from school_pre_post_detail_plu_pics");
						while($res=mysqli_fetch_array($result))
						{


$url=$res['preiamge'];
		echo '<div class="cd-timeline-block" >';
		echo			'<div class="cd-timeline-img cd-picture">';
		
		


		echo	'</div> <!-- cd-timeline-img -->';

			echo '<div class="cd-timeline-content">';
			echo	'<h2>'.$res['title_pre'].'</h2><br>';
			echo '<img height=30% width=50% src="'.$res['preiamge'].'">';
echo '<div style="margin-left:53%;margin-top:-40%;"><p>'.$res['predesc'].'</p>';

				echo '<span class="cd-date">2007</span></div></div></div>';


$url=$res['postimage'];
echo '<div class="cd-timeline-block" >';
		echo			'<div class="cd-timeline-img cd-movie">';
	
		echo	'</div> <!-- cd-timeline-img -->';

			echo '<div class="cd-timeline-content">';
			echo	'<h2>'.$res['title_post'].'</h2><br>';
			echo '<img height=30% width=50% src="'.$res['postimage'].'">';
echo '<div style="margin-left:53%;margin-top:-40%;"><p>'.$res['postdesc'].'</p>';

				echo '<span class="cd-date">2010</span></div></div></div>';

									}
				?>

				
				<!--<a href="#0" class="cd-read-more">Read more</a>
				 <!-- cd-timeline-content -->
		 <!-- cd-timeline-block -->

	<!--	<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-movie">
				<img src="img/cd-icon-movie.svg" alt="Movie">
			</div> <!-- cd-timeline-img -->

			<!--<div class="cd-timeline-content">
				<h2>Title of section 2</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
				<a href="#0" class="cd-read-more">Read more</a>
				<span class="cd-date">Jan 18</span>
			</div> <!-- cd-timeline-content -->
	<!--	</div> <!-- cd-timeline-block -->

	<!--	<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<img src="img/cd-icon-picture.svg" alt="Picture">
			</div> <!-- cd-timeline-img -->

		<!--	<div class="cd-timeline-content">
				<h2>Title of section 3</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>
				<a href="#0" class="cd-read-more">Read more</a>
				<span class="cd-date">Jan 24</span>
			</div> <!-- cd-timeline-content -->
<!--		</div> <!-- cd-timeline-block -->

	<!--	<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-location">
				<img src="img/cd-icon-location.svg" alt="Location">
			</div> <!-- cd-timeline-img -->

		<!--	<div class="cd-timeline-content">
				<h2>Title of section 4</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
				<a href="#0" class="cd-read-more">Read more</a>
				<span class="cd-date">Feb 14</span>
			</div> <!-- cd-timeline-content -->
		<!--</div> <!-- cd-timeline-block -->

		<!--<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-location">
				<img src="img/cd-icon-location.svg" alt="Location">
			</div> <!-- cd-timeline-img -->

		<!--	<div class="cd-timeline-content">
				<h2>Title of section 5</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
				<a href="#0" class="cd-read-more">Read more</a>
				<span class="cd-date">Feb 18</span>
			</div> <!-- cd-timeline-content -->
		<!--</div> <!-- cd-timeline-block -->
<!--
		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-movie">
				<img src="img/cd-icon-movie.svg" alt="Movie">
			</div> <!-- cd-timeline-img -->

	<!--		<div class="cd-timeline-content">
				<h2>Final Section</h2>
				<p>This is the content of the last section</p>
				<span class="cd-date">Feb 26</span>
			</div> <!-- cd-timeline-content -->
<!--		</div> <!-- cd-timeline-block -->
<!--	</section> <!-- cd-timeline -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
