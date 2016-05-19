<!DOCTYPE html >
<html lang="en">
<head>
	<title>
		The Hallowed Hog-<?php 
							$title=$_GET["article"];
							$title=substr($title,0,-4);
							$title=substr($title, strrpos($title, '/') + 1);
							echo $title;
							?>
	</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
	
	<!--Layout Dropdown-->
	<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
	
	<!--Architects Daughter Font-->
	<link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
	
	<style>
		/*Text for whole body*/
		body
		{
			color: black !important;
		}
		
		/*New decoration for active/current page category in navbar*/
		.active2
		{
			text-decoration:underline;
			font-weight:bold;
		}
	</style>		
</head>

<body id="top" >
<!--NAVBAR---------------------------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<div class="wrapper">
  <div id="header" style="margin-bottom:-10px;margin-top:5px">
	<img src="images/mascot.jpg" style="width:60px;height:60px;">
    <div class="fl_left" style="margin-left:60px;margin-top:-60px;">
      <h1><a href="index.php"><span style="font-size:x-large; color:black; font-weight:bold;vertical-align:57%;"><b>T</b>he</span><span style="color:red;font-weight:bold">H</span>allowed <span style="color:red;font-weight:bold">H</span>og</a></h1>
      <p>Carleton's Official Satirical News Source</p>
    </div>
    <!--<span style="margin-left:500px;margin-top:-50px;">-->
		<a href="https://www.facebook.com/TheHallowedHog"><i class="fa fa-facebook-square fa-5x" style="position:absolute;left:84%;top:5px;color:red"></i>
		<a href="https://twitter.com/TheHogCU"><i  class="fa fa-twitter fa-5x" style="position:absolute;left:90%;top:5px;color:red" ></i>
	<!--</span>-->
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li class="active2"><a href="index.php">Home</a></li>
        <li><a href="#">Categories</a>
          <ul>
		  	<li><a href="Carleton.php">Carleton</a></li>
            <li><a href="Politics.php">Politics</a></li>
            <li><a href="Sports.php">Sports</a></li>
            <li><a href="WorldWideAffairs.php">Worldwide Affairs</a></li>
			<li><a href="PopCulture.php">Pop Culture</a></li>
			<li><a href="Comics.php">Comics</a></li>
          </ul>
        </li>
        <li><a href="about.php">About</a></li>
		<li><a href="join.php">Become a Member!</a><
			<ul>
				<li><a href="join.php">How to join</a></li>
				<li><a href="memberResources.php">Member Resources</a></li>
			</ul>
		</li>
		<li class="last"><a href="archives.php">Archives</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!--END OF NAVBAR---------------------------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
	

<!--View Iframe-->
<div style="text-align:center;width:100%;height:700px;">
	<iframe src="<?php echo str_replace(" ","+",$_GET["article"]); ?>" style="height:100%;width:70%;">
</div>
	
<!--Categories-->
<div style="text-align:center;width:100%;height:500px;">
	<iframe src="Categories.php" style="border:0;width:100%;scrolling:no;overflow-y: hidden;height:100%" scrolling="no"></iframe>
</div>


<!--Footer-->
<div style="text-align:center;width:100%;height:285px">
	<iframe src="footer.html" style="border:0;width:100%;height:100%;scrolling:no;overflow-y: hidden;" scrolling="no"></iframe>
</div>
</body>
</html>