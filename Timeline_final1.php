<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css1/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css1/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title>HHF-Timeline</title>
</head>
<body style="margin-top:50px;">
<center><Strong style="color:black;font-size:30px;">Timeline<br><br>Peru</strong></center>
	<section id="cd-timeline" class="cd-container">


	<div class="cd-timeline-content" >
				<h2>Peru</h2>
</div>




<?php

						$con=mysqli_connect('localhost','vikas','vikas','gnsd0405') or die("error");
						$result=mysqli_query($con,"Select * from school_pre_post_detail_plu_pics");
						while($res=mysqli_fetch_array($result))
						{


$url=$res['preiamge'];
			echo '<div class="cd-timeline-block" >';
			echo '<div class="cd-timeline-img cd-picture">';
			echo	'</div>';

			echo '<div class="cd-timeline-content">';
			echo	'<h2>'.$res['title_pre'].'</h2><br>';
			echo '<img height=30% width=50% src="'.$res['preiamge'].'">';
			echo '<div style="margin-left:53%;margin-top:-40%;"><p>'.$res['predesc'].'</p>';
			echo '<span class="cd-date">2007</span></div></div></div>';


			$url=$res['postimage'];
			echo '<div class="cd-timeline-block" >';
			echo '<div class="cd-timeline-img cd-movie">';
	
			echo '</div>';

			echo '<div class="cd-timeline-content">';
			echo	'<h2>'.$res['title_post'].'</h2><br>';
			echo '<img height=30% width=50% src="'.$res['postimage'].'">';
echo '<div style="margin-left:53%;margin-top:-40%;"><p>'.$res['postdesc'].'</p>';

				echo '<span class="cd-date">2007</span></div></div></div>';

									}
				?>

<div class="cd-timeline-block" >
			<div class="cd-timeline-img cd-picture">
			</div>
			<div class="cd-timeline-content">
			<h2>Computer Literacy</h2><br>
			<img height=60% width=80% src="/complit.jpg">
			</div>
</div>
</section>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
