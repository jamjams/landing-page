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
	 	<a href="aboutme.php"><button type="button" class="btn btn-primary" autocomplete="off">
	  		ABOUT ME
		</button></a>
	
	 	<a href="contact.php"><button type="button" class="btn btn-contact" autocomplete="off">
	  		CONTACT
		</button></a>

		<a href="index.php"><button type="button" class="btn btn-projects" autocomplete="off">
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
      <img src="/landingpage/pics/instagramproject.png" alt="...">
      <div class="caption">
      	<h3>Instagram Api Home page</h3>
      </div>
    </div>
    <div class="item">
      <img src="http://vanimg.s3.amazonaws.com/blog-design-15.jpg" alt="...">
      <div class="caption">
      	<h3>Caption Text</h3>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/300x315" alt="...">
      <div class="caption">
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