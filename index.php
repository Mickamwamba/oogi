<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.2.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.2.0-dist/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	
</head>
<?php
$static_text=require_once('modules/text.php');
$trainings=require_once('modules/trainings.php');
?>
<body>
	<div class="container">
		<div class="row">
			<div style="height:4px;"></div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div id="header"><img height="200" src="logo.jpg" /></div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div id="menu-wrapper">
					<?php require_once "modules/menu.php"; ?>
				</div>
			</div>
		</div>
		<div class="row" id="content-body">
			<div class="col-sm-8">
				<div id="content-left"> <!--Content left col-->
					<div id="myCarousel" class="carousel slide">
						<!-- Carousel indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>
						<!-- Carousel items -->
						<div class="carousel-inner">
							<div class="item active">
								<img src="images/slide1.jpg" alt="First slide">
							</div>
							<div class="item">
								<img src="images/slide2.png" alt="Second slide">
							</div>
							<div class="item">
								<img src="images/slide3.jpg" alt="Third slide">
							</div>
						</div>
						<!-- Carousel nav -->
						<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
						<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
					</div>

					<div class="row">
						<div class="col-sm-12"><div id="home-abt-txt"><h3>The community</h3><?=$static_text["home_abt_text"]?></div></div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-12">
							<div class="section-header-wrapper"><h3>TRAININGS</h3></div>
							<div id="trainings-wrapper">
							<div class="nav-wrapper"><div class="training-nav"></div></div>
							<?php for ($i=0; $i < 3; $i++) { ?>
								<div class="training-item-wrapper">
									<a href="#">
										<div class="training-img-wrapper">
											<img src="images/slide1.jpg" >
											<div class="training-heading">The Impact of Mtwara gas discovery to the economic development</div>
										</div>
										<div class="training-details">Conducted on: 23 May 3 2014<br>Mbezi - Dar es Salaam</div>
									</a>
								</div>
							<?php } ?>
							<div class="nav-wrapper"><div class="training-nav"></div></div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-sm-4">
				<div id="content-right"> <!-- Content right col-->
					<div class="section-header-wrapper" align="center"><h4>UPCOMMING TRAININGS</h4></div>
					<div class="upcomming-trainings">
						<?php for ($i=0; $i < 5; $i++) { ?>
						<div class="upcomming-trainings-item">
							<div class="upcomming-trainings-item-left">
								<img src="logo.jpg">
							</div>
							<div class="upcomming-trainings-item-right">
								<div><a href="#">The Impact of Mtwara gas discovery to the economic development</a></div>
								<div class="ut-details">On 23rd March 2015 Mbez - Simaya</div>
							</div>
						</div>
						<?php } ?>
						<div align="right" class="upcomming-trainings-item"><button class="btn btn-default btn-block" >More...</button></div>
					</div>
				</div>
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col-sm-12">
				<div id="footer"> 
					<?php require_once "modules/footer.php"; ?>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="bootstrap-3.2.0-dist/js/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
</html>