<!DOCTYPE html >
<html lang="en">
<head>
	<title>About The Hallowed Hog</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
	
	<!--Layout Dropdown-->
	<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
	
	<!--Font-Awesome Icons-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
	<!--Display Image Scripts-->
	<script type="text/javascript" src="layout/scripts/galleryviewthemes/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="layout/scripts/galleryviewthemes/jquery.timers.1.2.js"></script>
	<script type="text/javascript" src="layout/scripts/galleryviewthemes/jquery.galleryview.2.1.1.min.js"></script>
	<script type="text/javascript" src="layout/scripts/galleryviewthemes/jquery.galleryview.setup.js"></script>
	
	<!--Architects Daughter Font-->
	<link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
	
	<style>
		/*Text for whole body*/
		body
		{
			color: black !important;
		}
		
		/*New styling for categories header in navbar, current page */
		.active2
		{
			text-decoration:underline;
			font-weight:bold;
		}
		
		/*Styling for text*/
		div.textContainer 
		{
			text-align: center;
		
		}
		div.textContainer p 
		{
			display: inline-block;
			text-align: left;
			width:70%;
			font-size:20px;
		}
	</style>	
	<!--PHP Functions-->
	<?php
		//Return caption from given article directory
		function getArticle($dir)
		{
			foreach($dir as $file)
			{
				if(strpos($file, '.pdf') !== false)
				{
					return $file;//found article url
				}
			}
			return false;
		}
		
		//Retrieve title from full article path
		function getTitle($article,$length)
		{
			$article=substr($article, 0, -4);//remove .pdf from name
			$article=substr($article, $length);//remove the parent directory from name
			$title=str_replace("+"," ",$article);
			return $title;
		}
		
	
		//List the files of the given category and provide a link
		function listFolderFiles($dir)
		{
			$ffs = scandir($dir);
			foreach($ffs as $ff)
			{
				if($ff != '.' && $ff != '..'){
					if(strpos($ff, '.pdf') !== false)
					{
						$url= "viewPageTest.php?article=".$dir."/".$ff;
						$title=substr($ff, 0, -4);
						$title=str_replace('+'," ",$title);
						echo "<a href='" .$url   ."'>"   .$title  ."</a></br>";
					}
					if(is_dir($dir.'/'.$ff)) listFolderFiles($dir.'/'.$ff);
				}
			}
			
		}

		
	?>
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
        <li ><a href="index.php">Home</a></li>
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
		<li class="last active2"><a href="archives.php">Archives</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!--END OF NAVBAR---------------------------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<div class="textContainer">
		<h1 style="font-size:40px; color:#059bd8;margin-bottom:-10px;">Archives</h1>
		
		<h1 style="font-size:30px; display: inline-block;text-align: left;width:70%;margin-bottom:0px;">Carleton</h1></p>
		<p style="margin-top:-20px;"><?php>listFolderFiles('archives/Carleton');?></p>
		
		<h1 style="font-size:30px; display: inline-block;text-align: left;width:70%;margin-bottom:0px;">Sports</h1></p>
		<p style="margin-top:-20px;"><?php>listFolderFiles('archives/Sports');?></p>
		
		<h1 style="font-size:30px; display: inline-block;text-align: left;width:70%;margin-bottom:0px;">Politics</h1></p>
		<p style="margin-top:-20px;"><?php>listFolderFiles('archives/Politics');?></p>
		
		<h1 style="font-size:30px; display: inline-block;text-align: left;width:70%;margin-bottom:0px;">Worldwide Affairs</h1></p>
		<p style="margin-top:-20px;"><?php>listFolderFiles('archives/WorldwideAffairs');?></p>
		
		<h1 style="font-size:30px; display: inline-block;text-align: left;width:70%;margin-bottom:0px;">Comics</h1></p>
		<p style="margin-top:-20px;"><?php>listFolderFiles('archives/Comics');?></p>
		
		<h1 style="font-size:30px; display: inline-block;text-align: left;width:70%;margin-bottom:0px;">Pop Culture</h1></p>
		<p style="margin-top:-20px;"><?php>listFolderFiles('archives/PopCulture');?></p>
</div>


<!--Footer-->
<div style="text-align:center;width:100%;height:285px;margin:0;">
	<iframe src="footer.html" style="border:0;width:100%;height:100%;scrolling:no;overflow-y: hidden;" scrolling="no"></iframe>
</div>
</body>
</html>