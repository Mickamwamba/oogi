<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.2.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.2.0-dist/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/trainings.css">
	
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

		<br><br>
		<div class="row" id="content-body">
			<div class="col-sm-8">
				<div id="content-left"> <!--Content left col-->
					
					<div class="row" >
						<div class="col-sm-12">
							<div class="section-header-wrapper"><h4>TRAININGS</h4></div>
							<div id="trainings-wrapper">
							<?php for ($i=0; $i < 9; $i++) { ?>
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

							</div>
						</div>
					</div>

					<br><br>
					<div class="row" >
						<div class="col-sm-12">
							<div class="section-header-wrapper"><h4>Resources</h4></div>
							<h3>Books</h3>
								<?php for ($i=0; $i < 6; $i++) { ?>
								<div class="book-resources-item">
									<div class="book-resources-item-left">
										<img src="logo.jpg" class="thumbnail">
									</div>
									<div class="book-resources-item-right">
										<div><a href="#">The Impact of Mtwara gas discovery to the economic development</a></div>
										<div class="book-resources-details">Added 23rd March 2015</div>
									</div>
								</div>
								<?php } ?>
							<h3>Videos</h3>
							<div class="row">
								<div class="col-sm-6">
									<img src="images/slide1.jpg" class="img-responsive">
									<div class="c-video-wrapper">
										<div>The Impact of Mtwara gas discovery to the economic development</div>
										<div class="video-resources-details">Added 23rd March 2015</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div id="videos-wrapper">
									<?php for ($i=0; $i < 6; $i++) { ?>
									<div class="video-resources-item">
										<div class="video-resources-item-left">
											<img src="images/slide1.jpg" class="thumbnail">
										</div>
										<div class="video-resources-item-right">
											<div><a href="#">The Impact of Mtwara gas discovery to the economic development</a></div>
											<div class="video-resources-details">Added 23rd March 2015</div>
										</div>
									</div>
									<?php } ?>
									</div>

								</div>
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