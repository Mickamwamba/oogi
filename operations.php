<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.2.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.2.0-dist/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/operations.css">
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
		<div class="row" id="content-body">
			<div class="col-sm-8">
				<div id="content-left"> <!--Content left col-->
					<div class="operations-wrapper" id="operations-wrapper">
						<div class="operation-brief-wrapper">
								<div class="row operation-brief">
								<div class="col-sm-12">
								<div class="media">
								<a class="pull-left" href="#">
								<img class="media-object article-image" src="songosongo.jpeg">
								</a>
								<div class="media-body">
								<h4 class="media-heading article-heading">The magic of Mtwara Gas</h4>
								<div class="short-description">
									<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputateLorem ipsumLorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputateLorem ipsumLorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputateLorem ipsum </p>
								</div>
								<a href="#"><div class="readmore">Read More</div></a>
								</div>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div id="content-right"> <!-- Content right col-->
				</div>
			</div>
		</div>
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
<script type="text/javascript">
el=document.getElementById("operations-wrapper");
el.innerHTML='';
for(i=0; i< 4; i++){

	el.innerHTML +='<div class="operation-brief-wrapper"><div class="row operation-brief"><div class="col-sm-12"><div class="media"><a class="pull-left" href="#"><img class="media-object operation-image" src="songosongo.jpeg"></a><div class="media-body"><h3 class="media-heading operation-heading">The Magic of Mtwara Gas</h3><div class="short-description"><p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputateLorem ipsumLorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputateLorem ipsumLorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputateLorem ipsum </p></div><a href="#"><div class="readmore">Read More</div></a></div></div></div></div></div>';
}
</script>
</html>