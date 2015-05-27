<?php 
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="css/projects.css"> 
 	<title></title>
 </head>
 <body>
 	
 	<div class="header">
   		<h1>My Projects</h1> 
	</div>
	
	<div class="navbuttons">
	 	<a href="http://localhost/landingpage/aboutme.php"><button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
	  		ABOUT ME
		</button></a>
	
	 	<a href="http://localhost/landingpage/contact.php"><button type="button" class="btn btn-contact" data-toggle="button" aria-pressed="false" autocomplete="off">
	  		CONTACT
		</button></a>

		<a href="http://localhost/landingpage/index.php"><button type="button" class="btn btn-projects" data-toggle="button" aria-pressed="false" autocomplete="off">
	  		HOME
		</button></a>
	</div>
<!-- carousel code -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="http://placehold.it/300x315" alt="...">
      <div class="carousel-caption">
      	<h3>Caption Text</h3>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/300x315" alt="...">
      <div class="carousel-caption">
      	<h3>Caption Text</h3>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/300x315" alt="...">
      <div class="carousel-caption">
      	<h3>Caption Text</h3>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->

 	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 	<script type="text/javascript" src="js/bootstrap.min.js"></script>
 </body>
 </html>