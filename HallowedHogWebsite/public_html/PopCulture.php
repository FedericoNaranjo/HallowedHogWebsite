<!DOCTYPE html >
<html lang="en">
<head>
	<title>The Hallowed Hog-Pop Culture</title>
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
	//PopCulture Section------------------------------------------------------------------------------>
	////////////////////////////////////////////////////////////////////////////////////////////////
	$PopCulture = glob('archives/PopCulture/*');
	
	//PopCulture1
	$PopCulture1=$PopCulture[count($PopCulture)-1];
	$PopCulture1Length=strlen($PopCulture1)+1;
	$PopCulture1.="/*";
	$PopCulture1=glob($PopCulture1);
	
	$PopCulture1Pic=getPic($PopCulture1);
 	$PopCulture1Caption=getCaption($PopCulture1);
	$PopCulture1Article=getArticle($PopCulture1);
	$PopCulture1Title=getTitle($PopCulture1Article,$PopCulture1Length);
	
	//PopCulture2
	$PopCulture2=$PopCulture[count($PopCulture)-2];
	$PopCulture2Length=strlen($PopCulture2)+1;
	$PopCulture2.="/*";
	$PopCulture2=glob($PopCulture2);
	
	$PopCulture2Pic=getPic($PopCulture2);
 	$PopCulture2Caption=getCaption($PopCulture2);
	$PopCulture2Article=getArticle($PopCulture2);
	$PopCulture2Title=getTitle($PopCulture2Article,$PopCulture2Length);
	
	//PopCulture3
	$PopCulture3=$PopCulture[count($PopCulture)-3];
	$PopCulture3Length=strlen($PopCulture3)+1;
	$PopCulture3.="/*";
	$PopCulture3=glob($PopCulture3);
	
	$PopCulture3Pic=getPic($PopCulture3);
 	$PopCulture3Caption=getCaption($PopCulture3);
	$PopCulture3Article=getArticle($PopCulture3);
	$PopCulture3Title=getTitle($PopCulture3Article,$PopCulture3Length);
	
	//PopCulture4
	$PopCulture4=$PopCulture[count($PopCulture)-4];
	$PopCulture4Length=strlen($PopCulture4)+1;
	$PopCulture4.="/*";
	$PopCulture4=glob($PopCulture4);
	
	$PopCulture4Pic=getPic($PopCulture4);
 	$PopCulture4Caption=getCaption($PopCulture4);
	$PopCulture4Article=getArticle($PopCulture4);
	$PopCulture4Title=getTitle($PopCulture4Article,$PopCulture4Length);
	
	//PopCulture5
	$PopCulture5=$PopCulture[count($PopCulture)-5];
	$PopCulture5Length=strlen($PopCulture5)+1;
	$PopCulture5.="/*";
	$PopCulture5=glob($PopCulture5);
	
	$PopCulture5Pic=getPic($PopCulture5);
 	$PopCulture5Caption=getCaption($PopCulture5);
	$PopCulture5Article=getArticle($PopCulture5);
	$PopCulture5Title=getTitle($PopCulture5Article,$PopCulture5Length);
	
	//PopCulture6
	$PopCulture6=$PopCulture[count($PopCulture)-6];
	$PopCulture6Length=strlen($PopCulture6)+1;
	$PopCulture6.="/*";
	$PopCulture6=glob($PopCulture6);
	
	$PopCulture6Pic=getPic($PopCulture6);
 	$PopCulture6Caption=getCaption($PopCulture6);
	$PopCulture6Article=getArticle($PopCulture6);
	$PopCulture6Title=getTitle($PopCulture6Article,$PopCulture6Length);
	
	//PopCulture7
	$PopCulture7=$PopCulture[count($PopCulture)-7];
	$PopCulture7Length=strlen($PopCulture7)+1;
	$PopCulture7.="/*";
	$PopCulture7=glob($PopCulture7);
	
	$PopCulture7Pic=getPic($PopCulture7);
 	$PopCulture7Caption=getCaption($PopCulture7);
	$PopCulture7Article=getArticle($PopCulture7);
	$PopCulture7Title=getTitle($PopCulture7Article,$PopCulture7Length);
	
	//PopCulture8
	$PopCulture8=$PopCulture[count($PopCulture)-8];
	$PopCulture8Length=strlen($PopCulture8)+1;
	$PopCulture8.="/*";
	$PopCulture8=glob($PopCulture8);
	
	$PopCulture8Pic=getPic($PopCulture8);
 	$PopCulture8Caption=getCaption($PopCulture8);
	$PopCulture8Article=getArticle($PopCulture8);
	$PopCulture8Title=getTitle($PopCulture8Article,$PopCulture8Length);
	///END OF POPCULTURE----------------------------------------------------------------------->
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
        <li ><a href="index.php">Home</a></li>
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
	
<h1 style="font-size:40px; color:#059bd8;margin-bottom:-10px;text-align: center;">Pop Culture</h1>
<!-- Main Display -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <div id="featured_slide">
        <ul id="featurednews">
          <li><img src="<?php echo $PopCulture1Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $PopCulture1Title; ?></h2>
              <p><?php echo $PopCulture1Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$PopCulture1Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
          <li><img src="<?php echo $PopCulture2Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $PopCulture2Title; ?></h2>
              <p><?php echo $PopCulture2Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$PopCulture2Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
		  <li><img src="<?php echo $PopCulture3Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $PopCulture3Title; ?></h2>
              <p><?php echo $PopCulture3Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$PopCulture3Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
		  <li><img src="<?php echo $PopCulture4Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $PopCulture4Title; ?></h2>
              <p><?php echo $PopCulture4Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$PopCulture4Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
		  <li><img src="<?php echo $PopCulture5Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $PopCulture5Title; ?></h2>
              <p><?php echo $PopCulture5Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$PopCulture5Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
        </ul>
      </div>
	 
    </div>
	
    <div class="column">
      <ul class="latestnews">
        <li><img src="<?php echo $PopCulture6Pic; ?>" alt="" style="height:100px;width:100px;" />
          <p><strong><a href="<?php echo "viewPageTest.php?article=".$PopCulture6Article; ?>"><?php echo $PopCulture6Title; ?></a></strong></br><?php echo $PopCulture6Caption;?></p>
        </li>
        <li><img src="<?php echo $PopCulture7Pic; ?>" alt="" style="height:100px;width:100px;" />
          <p><strong><a href="<?php echo "viewPageTest.php?article=".$PopCulture7Article; ?>"><?php echo $PopCulture7Title; ?></a></strong></br><?php echo $PopCulture7Caption;?></p>
        </li>
        <li class="last"><img src="<?php echo $PopCulture8Pic; ?>" alt="" style="height:100px;width:100px;" />
          <p><strong><a href="<?php echo "viewPageTest.php?article=".$PopCulture8Article; ?>"><?php echo $PopCulture8Title; ?></a></strong></br><?php echo $PopCulture8Caption;?></p>
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