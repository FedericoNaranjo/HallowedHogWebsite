<!DOCTYPE html >
<html lang="en">
<head>
	<title>The Hallowed Hog-Worldwide Affairs</title>
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
	
	//WorldwideAffairs Section------------------------------------------------------------------------------>
	////////////////////////////////////////////////////////////////////////////////////////////////
	$WorldwideAffairs = glob('archives/WorldwideAffairs/*');
	
	//WorldwideAffairs1
	$WorldwideAffairs1=$WorldwideAffairs[count($WorldwideAffairs)-1];
	$WorldwideAffairs1Length=strlen($WorldwideAffairs1)+1;
	$WorldwideAffairs1.="/*";
	$WorldwideAffairs1=glob($WorldwideAffairs1);
	
	$WorldwideAffairs1Pic=getPic($WorldwideAffairs1);
 	$WorldwideAffairs1Caption=getCaption($WorldwideAffairs1);
	$WorldwideAffairs1Article=getArticle($WorldwideAffairs1);
	$WorldwideAffairs1Title=getTitle($WorldwideAffairs1Article,$WorldwideAffairs1Length);
	
	//WorldwideAffairs2
	$WorldwideAffairs2=$WorldwideAffairs[count($WorldwideAffairs)-2];
	$WorldwideAffairs2Length=strlen($WorldwideAffairs2)+1;
	$WorldwideAffairs2.="/*";
	$WorldwideAffairs2=glob($WorldwideAffairs2);
	
	$WorldwideAffairs2Pic=getPic($WorldwideAffairs2);
 	$WorldwideAffairs2Caption=getCaption($WorldwideAffairs2);
	$WorldwideAffairs2Article=getArticle($WorldwideAffairs2);
	$WorldwideAffairs2Title=getTitle($WorldwideAffairs2Article,$WorldwideAffairs2Length);
	
	//WorldwideAffairs3
	$WorldwideAffairs3=$WorldwideAffairs[count($WorldwideAffairs)-3];
	$WorldwideAffairs3Length=strlen($WorldwideAffairs3)+1;
	$WorldwideAffairs3.="/*";
	$WorldwideAffairs3=glob($WorldwideAffairs3);
	
	$WorldwideAffairs3Pic=getPic($WorldwideAffairs3);
 	$WorldwideAffairs3Caption=getCaption($WorldwideAffairs3);
	$WorldwideAffairs3Article=getArticle($WorldwideAffairs3);
	$WorldwideAffairs3Title=getTitle($WorldwideAffairs3Article,$WorldwideAffairs3Length);
	
	//WorldwideAffairs4
	$WorldwideAffairs4=$WorldwideAffairs[count($WorldwideAffairs)-4];
	$WorldwideAffairs4Length=strlen($WorldwideAffairs4)+1;
	$WorldwideAffairs4.="/*";
	$WorldwideAffairs4=glob($WorldwideAffairs4);
	
	$WorldwideAffairs4Pic=getPic($WorldwideAffairs4);
 	$WorldwideAffairs4Caption=getCaption($WorldwideAffairs4);
	$WorldwideAffairs4Article=getArticle($WorldwideAffairs4);
	$WorldwideAffairs4Title=getTitle($WorldwideAffairs4Article,$WorldwideAffairs4Length);
	
	//WorldwideAffairs5
	$WorldwideAffairs5=$WorldwideAffairs[count($WorldwideAffairs)-5];
	$WorldwideAffairs5Length=strlen($WorldwideAffairs5)+1;
	$WorldwideAffairs5.="/*";
	$WorldwideAffairs5=glob($WorldwideAffairs5);
	
	$WorldwideAffairs5Pic=getPic($WorldwideAffairs5);
 	$WorldwideAffairs5Caption=getCaption($WorldwideAffairs5);
	$WorldwideAffairs5Article=getArticle($WorldwideAffairs5);
	$WorldwideAffairs5Title=getTitle($WorldwideAffairs5Article,$WorldwideAffairs5Length);
	
	//WorldwideAffairs6
	$WorldwideAffairs6=$WorldwideAffairs[count($WorldwideAffairs)-6];
	$WorldwideAffairs6Length=strlen($WorldwideAffairs6)+1;
	$WorldwideAffairs6.="/*";
	$WorldwideAffairs6=glob($WorldwideAffairs6);
	
	$WorldwideAffairs6Pic=getPic($WorldwideAffairs6);
 	$WorldwideAffairs6Caption=getCaption($WorldwideAffairs6);
	$WorldwideAffairs6Article=getArticle($WorldwideAffairs6);
	$WorldwideAffairs6Title=getTitle($WorldwideAffairs6Article,$WorldwideAffairs6Length);
	
	//WorldwideAffairs7
	$WorldwideAffairs7=$WorldwideAffairs[count($WorldwideAffairs)-7];
	$WorldwideAffairs7Length=strlen($WorldwideAffairs7)+1;
	$WorldwideAffairs7.="/*";
	$WorldwideAffairs7=glob($WorldwideAffairs7);
	
	$WorldwideAffairs7Pic=getPic($WorldwideAffairs7);
 	$WorldwideAffairs7Caption=getCaption($WorldwideAffairs7);
	$WorldwideAffairs7Article=getArticle($WorldwideAffairs7);
	$WorldwideAffairs7Title=getTitle($WorldwideAffairs7Article,$WorldwideAffairs7Length);
	
	//WorldwideAffairs8
	$WorldwideAffairs8=$WorldwideAffairs[count($WorldwideAffairs)-8];
	$WorldwideAffairs8Length=strlen($WorldwideAffairs8)+1;
	$WorldwideAffairs8.="/*";
	$WorldwideAffairs8=glob($WorldwideAffairs8);
	
	$WorldwideAffairs8Pic=getPic($WorldwideAffairs8);
 	$WorldwideAffairs8Caption=getCaption($WorldwideAffairs8);
	$WorldwideAffairs8Article=getArticle($WorldwideAffairs8);
	$WorldwideAffairs8Title=getTitle($WorldwideAffairs8Article,$WorldwideAffairs8Length);
	///END OF WORLDWIDEAFFAIRS----------------------------------------------------------------------->
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
	
<h1 style="font-size:40px; color:#059bd8;margin-bottom:-10px;text-align: center;">Worldwide Affairs</h1>
<!-- Main Display -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <div id="featured_slide">
        <ul id="featurednews">
          <li><img src="<?php echo $WorldwideAffairs1Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $WorldwideAffairs1Title; ?></h2>
              <p><?php echo $WorldwideAffairs1Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$WorldwideAffairs1Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
          <li><img src="<?php echo $WorldwideAffairs2Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $WorldwideAffairs2Title; ?></h2>
              <p><?php echo $WorldwideAffairs2Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$WorldwideAffairs2Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
		  <li><img src="<?php echo $WorldwideAffairs3Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $WorldwideAffairs3Title; ?></h2>
              <p><?php echo $WorldwideAffairs3Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$WorldwideAffairs3Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
		  <li><img src="<?php echo $WorldwideAffairs4Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $WorldwideAffairs4Title; ?></h2>
              <p><?php echo $WorldwideAffairs4Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$WorldwideAffairs4Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
		  <li><img src="<?php echo $WorldwideAffairs5Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $WorldwideAffairs5Title; ?></h2>
              <p><?php echo $WorldwideAffairs5Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$WorldwideAffairs5Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
        </ul>
      </div>
	 
    </div>
	
    <div class="column">
      <ul class="latestnews">
        <li><img src="<?php echo $WorldwideAffairs6Pic; ?>" alt="" style="height:100px;width:100px;" />
          <p><strong><a href="<?php echo "viewPageTest.php?article=".$WorldwideAffairs6Article; ?>"><?php echo $WorldwideAffairs6Title; ?></a></strong></br><?php echo $WorldwideAffairs6Caption;?></p>
        </li>
        <li><img src="<?php echo $WorldwideAffairs7Pic; ?>" alt="" style="height:100px;width:100px;" />
          <p><strong><a href="<?php echo "viewPageTest.php?article=".$WorldwideAffairs7Article; ?>"><?php echo $WorldwideAffairs7Title; ?></a></strong></br><?php echo $WorldwideAffairs7Caption;?></p>
        </li>
        <li class="last"><img src="<?php echo $WorldwideAffairs8Pic; ?>" alt="" style="height:100px;width:100px;" />
          <p><strong><a href="<?php echo "viewPageTest.php?article=".$WorldwideAffairs8Article; ?>"><?php echo $WorldwideAffairs8Title; ?></a></strong></br><?php echo $WorldwideAffairs8Caption;?></p>
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