<!DOCTYPE html >
<html lang="en">
<head>
	<title>The Hallowed Hog-Comics</title>
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
	</style>
	
	<!--PHP Functions, don't need to go here-->
	<?php
		//Return picture from given article directory
		function getPic($dir)
		{
			foreach($dir as $file)
			{
				if(strpos($file, 'Pic') !== false)
				{
					return $file;//found picture file
				}
			}
		}
		
		//Return caption from given article directory
		function getCaption($dir)
		{
			foreach($dir as $file)
			{
				if(strpos($file, 'Caption') !== false)
				{
					return file_get_contents ($file);//found caption file
				}
			}
		}
		
	
		
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
		}
		
		
		//Retrieve title from full article path
		function getTitle($article,$length)
		{
			$article=substr($article, 0, -4);//remove .pdf from name
			$article=substr($article, $length);//remove the parent directory from name
			$title=str_replace("+"," ",$article);
			return $title;
		}
			
	?>
	
	<!--PHP Referencing-->
	<?php
	//Comics Section------------------------------------------------------------------------------>
	////////////////////////////////////////////////////////////////////////////////////////////////
	$Comics = glob('archives/Comics/*');
	//var_dump($Comics);
	
	//Comics1
	$Comics1=$Comics[count($Comics)-1];
	$Comics1Length=strlen($Comics1)+1;
	$Comics1.="/*";
	$Comics1=glob($Comics1);
	
	$Comics1Pic=getPic($Comics1);
 	$Comics1Caption=getCaption($Comics1);
	$Comics1Article=getArticle($Comics1);
	$Comics1Title=getTitle($Comics1Article,$Comics1Length);
	
	//Comics2
	$Comics2=$Comics[count($Comics)-2];
	$Comics2Length=strlen($Comics2)+1;
	$Comics2.="/*";
	$Comics2=glob($Comics2);
	
	$Comics2Pic=getPic($Comics2);
 	$Comics2Caption=getCaption($Comics2);
	$Comics2Article=getArticle($Comics2);
	$Comics2Title=getTitle($Comics2Article,$Comics2Length);
	
	//Comics3
	$Comics3=$Comics[count($Comics)-3];
	$Comics3Length=strlen($Comics3)+1;
	$Comics3.="/*";
	$Comics3=glob($Comics3);
	
	$Comics3Pic=getPic($Comics3);
 	$Comics3Caption=getCaption($Comics3);
	$Comics3Article=getArticle($Comics3);
	$Comics3Title=getTitle($Comics3Article,$Comics3Length);
	
	//Comics4
	$Comics4=$Comics[count($Comics)-4];
	$Comics4Length=strlen($Comics4)+1;
	$Comics4.="/*";
	$Comics4=glob($Comics4);
	
	$Comics4Pic=getPic($Comics4);
 	$Comics4Caption=getCaption($Comics4);
	$Comics4Article=getArticle($Comics4);
	$Comics4Title=getTitle($Comics4Article,$Comics4Length);
	
	//Comics5
	$Comics5=$Comics[count($Comics)-5];
	$Comics5Length=strlen($Comics5)+1;
	$Comics5.="/*";
	$Comics5=glob($Comics5);
	
	$Comics5Pic=getPic($Comics5);
 	$Comics5Caption=getCaption($Comics5);
	$Comics5Article=getArticle($Comics5);
	$Comics5Title=getTitle($Comics5Article,$Comics5Length);
	
	//Comics6
	$Comics6=$Comics[count($Comics)-6];
	$Comics6Length=strlen($Comics6)+1;
	$Comics6.="/*";
	$Comics6=glob($Comics6);
	
	$Comics6Pic=getPic($Comics6);
 	$Comics6Caption=getCaption($Comics6);
	$Comics6Article=getArticle($Comics6);
	$Comics6Title=getTitle($Comics6Article,$Comics6Length);
	
	//Comics7
	$Comics7=$Comics[count($Comics)-7];
	$Comics7Length=strlen($Comics7)+1;
	$Comics7.="/*";
	$Comics7=glob($Comics7);
	
	$Comics7Pic=getPic($Comics7);
 	$Comics7Caption=getCaption($Comics7);
	$Comics7Article=getArticle($Comics7);
	$Comics7Title=getTitle($Comics7Article,$Comics7Length);
	
	//Comics8
	$Comics8=$Comics[count($Comics)-8];
	$Comics8Length=strlen($Comics8)+1;
	$Comics8.="/*";
	$Comics8=glob($Comics8);
	
	$Comics8Pic=getPic($Comics8);
 	$Comics8Caption=getCaption($Comics8);
	$Comics8Article=getArticle($Comics8);
	$Comics8Title=getTitle($Comics8Article,$Comics8Length);
	///END OF COMICS----------------------------------------------------------------------->
	//////////////////////////////////////////////////////////////////////////////////////////
	
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
		
        <!-- changing margins -->
        <a href="https://www.facebook.com/TheHallowedHog">
            <i class="fa fa-facebook-square fa-5x" style="position:absolute;left:82%;top:5px;color:red">
            </i>
        </a>
        
        <a href="https://twitter.com/TheHogCU">
            <i  class="fa fa-twitter fa-5x" style="position:absolute;left:90%;top:5px;color:red" >
            </i>
        </a>
	<!--</span>-->
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li class="active2"><a href="#">Categories</a>
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
	
<h1 style="font-size:40px; color:#059bd8;margin-bottom:-10px;text-align: center;">Comics</h1>
<!-- Main Display -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <div id="featured_slide">
        <ul id="featurednews">
          <li><img src="<?php echo $Comics1Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $Comics1Title; ?></h2>
              <p><?php echo $Comics1Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$Comics1Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
          <li><img src="<?php echo $Comics2Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $Comics2Title; ?></h2>
              <p><?php echo $Comics2Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$Comics2Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
		  <li><img src="<?php echo $Comics3Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $Comics3Title; ?></h2>
              <p><?php echo $Comics3Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$Comics3Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
		  <li><img src="<?php echo $Comics4Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $Comics4Title; ?></h2>
              <p><?php echo $Comics4Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$Comics4Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
		  <li><img src="<?php echo $Comics5Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $Comics5Title; ?></h2>
              <p><?php echo $Comics5Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$Comics5Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
        </ul>
      </div>
	 
    </div>
	
    <div class="column">
      <ul class="latestnews">
        <li><img src="<?php echo $Comics6Pic; ?>" alt="" style="height:100px;width:100px;" />
          <p><strong><a href="<?php echo "viewPageTest.php?article=".$Comics6Article; ?>"><?php echo $Comics6Title; ?></a></strong></br><?php echo $Comics6Caption;?></p>
        </li>
        <li><img src="<?php echo $Comics7Pic; ?>" alt="" style="height:100px;width:100px;" />
          <p><strong><a href="<?php echo "viewPageTest.php?article=".$Comics7Article; ?>"><?php echo $Comics7Title; ?></a></strong></br><?php echo $Comics7Caption;?></p>
        </li>
        <li class="last"><img src="<?php echo $Comics8Pic; ?>" alt="" style="height:100px;width:100px;" />
          <p><strong><a href="<?php echo "viewPageTest.php?article=".$Comics8Article; ?>"><?php echo $Comics8Title; ?></a></strong></br><?php echo $Comics8Caption;?></p>
        </li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>





<!--Categories-->
<div style="text-align:center;width:100%;height:500px;">
	<iframe src="Categories.php" style="border:0;width:100%;scrolling:no;overflow-y: hidden;height:100%" scrolling="no"></iframe>
</div>

<!--Footer-->
<div style="text-align:center;width:100%;height:285px;margin:0;">
	<iframe src="footer.html" style="border:0;width:100%;height:100%;scrolling:no;overflow-y: hidden;" scrolling="no"></iframe>
</div>
</body>
</html>