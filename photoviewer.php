<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.2.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style type="text/css">
	.photoviewer-wrapper{
		min-height: 200px;
		border-right: 0px solid #e9e9e9;
		border-left: 0px solid #e9e9e9;
		border-bottom: 4px double #e9e9e9;
		border-top: 4px double #e9e9e9;
		margin-bottom: 100px;
		padding: 2px;
		overflow: hidden;
	}
	.photoviewer-wrapper>.row, .photoviewer-wrapper .col-sm-3{
		height: 100%;
	}
	.photoviewer-wrapper>.row>div:last-child{
		padding-left: 0px;
	}
	.photoviewer-wrapper>.row>div:first-child{
		padding-right: 0px;
	}
	.right-thumbs, .left-thumbs{
		margin-top: 60px;
		position: relative;
		width: 200%;
		height: 350px;
	}
	.right-thumbs{
		margin-right: -100%;
	}
	.left-thumbs{
		margin-left: -100%;
	}
	.photo-main{
		padding: 4px;
	}
	.right-thumbs>img, .left-thumbs >img{
		position: absolute;
		height: 240px;
		cursor: pointer;
		border: 1px solid silver;
		background: white;

	}
	.right-thumbs>img:hover, .left-thumbs >img:hover{
		border: 2px solid silver;
	}
	.photoviewer-wrapper img{
		padding: 4px;
	}
	.photoviewer-wrapper .thumbnail{
		margin-bottom: 0;
	}
	.left-thumbs>img:first-child{
		width: 90%;
		left: 10%;
		top: 10%;
		z-index: 12;
	}
	.left-thumbs>img:nth-child(2){
		width: 80%;
		z-index: 5;
	}
	.left-thumbs>img:nth-child(3){
		width: 70%;
		left: -10%;
		top: -10%;
		z-index: 1;
	}

	.right-thumbs>img:first-child{
		width: 90%;
		right: 10%;
		top: 10%;
		z-index: 12;
	}
	.right-thumbs>img:nth-child(2){
		width: 80%;
		right: 0;
		z-index: 5;
	}
	.right-thumbs>img:nth-child(3){
		width: 70%;
		right: -10%;
		top: -10%;
		z-index: 1;
	}
	</style>
	
</head>
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
			<div class="photoviewer-wrapper">
				<div class="row">
					<div class="col-sm-2">
						<div class="left-thumbs">
							<img src="images/slide2.png" class="img-responsive" align="center">
							<img src="images/slide3.jpg" class="img-responsive" align="center">
							<img src="images/slide2.png" class="img-responsive" align="center">
						</div>
					</div>
					<div class="col-sm-8 photo-main" ><img src="images/slide1.jpg" class="img-responsive"></div>
					<div class="col-sm-2">
						<div class="right-thumbs">
						<img src="images/slide2.png" class="img-responsive" align="center">
						<img src="images/slide3.jpg" class="img-responsive" align="center">
						<img src="images/slide1.jpg" class="img-responsive">
					</div>
					</div>
				</div>
			</div>
		</div>
		</div>

	</div>
</body>
<script type="text/javascript" src="bootstrap-3.2.0-dist/js/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
</html>