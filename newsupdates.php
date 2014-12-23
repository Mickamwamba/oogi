<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.2.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.2.0-dist/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/newsupdates.css">

</head>
<body>
</div>
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
					<div class="content-wrapper">
						<div class="news-wrapper">
							<div class="news-header">
								<h2>News and Updates</h2>
							</div>
							<div class="row news-container">
								<div id="news-left" class="col-sm-6">
				
								</div>
								<div id="news-right" class="col-sm-6">
									
								</div>
							</div>
						</div>
						<div class="conferences-wrapper">
							<div class="conferences-header">
								<h2>Conferences</h2>
							</div>
							<div class="row conferences-container">
								<div id="conferences-left" class="col-sm-6">
				
								</div>
								<div id="conferences-right" class="col-sm-6">
									
								</div>
							</div>
						</div>
						<div id="jobs-wrapper">
							<div class="jobs-header"><h2>Jobs and Vacancies Updates</h2>
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
<script type="text/javascript" src=""></script>
<script type="text/javascript">
   el = document.getElementById("news-left");
   el1=document.getElementById("news-right");
  for(i=0; i<4; i++){

  	el.innerHTML +='<div class="media brief"><a class="pull-left" href="#"><img class="media-object image" src="songosongo.jpeg"></a><div class="media-body"><a href="news.php"><h5 class="media-heading">Ministry Report on Songo Songo Gas Depletion</h5></a><label class="postedon">Posted on Mon,12 Feb</label></div></div>';
  	el1.innerHTML +='<div class="media brief"><a class="pull-left" href="#"><img class="media-object image" src="songosongo.jpeg"></a><div class="media-body"><h5 class="media-heading">Ministry Report on Songo Songo Gas Depletion</h5><label class="postedon">Posted on Mon,12 Feb</label></div></div>';

  }

  el3 = document.getElementById("conferences-left");
   el4=document.getElementById("conferences-right");

   for(i=0; i<4; i++){
  	 //el3.innerHTML += '<div class="conference-brief"><div class="image"><img src="songosongo.jpeg"></div><div  class="conference-heading"><h5> Ministry Report on Songo Songo Gas Depletion </h5></div></div>';
   	  el4.innerHTML +='<div class="media brief"><a class="pull-left" href="#"><img class="media-object image" src="songosongo.jpeg"></a><div class="media-body"><a href="conference.php"><h5 class="media-heading">World Oil&Gas Summit</h5></a><label class="postedon">Date Mon,12 Feb</label><label class="conference-venue">Dodoma</label></div></div>';
       
       el3.innerHTML +='<div class="media brief"><a class="pull-left" href="#"><img class="media-object image" src="songosongo.jpeg"></a><div class="media-body"><a href="conference.php"><h5 class="media-heading">World Oil&Gas Summit</h5></a><label class="postedon">Date Mon,12 Feb</label><label class="conference-venue">Dodoma</label></div></div>';

     
   }

   el5= document.getElementById("jobs-wrapper");
   for(i=0; i<3; i++){

   	el5.innerHTML +='<div class="jobs-container"><div class="job-announcement"><a href=""><div class="position"><h4>Field Engineer</h4></div></a> <span>Baker Hughes Oil Company</span><div class="region">Morogoro</div><div class="deadline"> Application Deadline: Tue, 27 March 2015 </div></div></div>';
   }



</script>
</html>
