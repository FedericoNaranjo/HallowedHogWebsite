<!DOCTYPE html >
<html lang="en">
<head>
	<title>The Hallowed Hog-Politics</title>
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
	
	//Politics Section------------------------------------------------------------------------------>
	////////////////////////////////////////////////////////////////////////////////////////////////
	$Politics = glob('archives/Politics/*');
	
	//Politics1
	$Politics1=$Politics[count($Politics)-1];
	$Politics1Length=strlen($Politics1)+1;
	$Politics1.="/*";
	$Politics1=glob($Politics1);
	
	$Politics1Pic=getPic($Politics1);
 	$Politics1Caption=getCaption($Politics1);
	$Politics1Article=getArticle($Politics1);
	$Politics1Title=getTitle($Politics1Article,$Politics1Length);
	
	//Politics2
	$Politics2=$Politics[count($Politics)-2];
	$Politics2Length=strlen($Politics2)+1;
	$Politics2.="/*";
	$Politics2=glob($Politics2);
	
	$Politics2Pic=getPic($Politics2);
 	$Politics2Caption=getCaption($Politics2);
	$Politics2Article=getArticle($Politics2);
	$Politics2Title=getTitle($Politics2Article,$Politics2Length);
	
	//Politics3
	$Politics3=$Politics[count($Politics)-3];
	$Politics3Length=strlen($Politics3)+1;
	$Politics3.="/*";
	$Politics3=glob($Politics3);
	
	$Politics3Pic=getPic($Politics3);
 	$Politics3Caption=getCaption($Politics3);
	$Politics3Article=getArticle($Politics3);
	$Politics3Title=getTitle($Politics3Article,$Politics3Length);
	
	//Politics4
	$Politics4=$Politics[count($Politics)-4];
	$Politics4Length=strlen($Politics4)+1;
	$Politics4.="/*";
	$Politics4=glob($Politics4);
	
	$Politics4Pic=getPic($Politics4);
 	$Politics4Caption=getCaption($Politics4);
	$Politics4Article=getArticle($Politics4);
	$Politics4Title=getTitle($Politics4Article,$Politics4Length);
	
	//Politics5
	$Politics5=$Politics[count($Politics)-5];
	$Politics5Length=strlen($Politics5)+1;
	$Politics5.="/*";
	$Politics5=glob($Politics5);
	
	$Politics5Pic=getPic($Politics5);
 	$Politics5Caption=getCaption($Politics5);
	$Politics5Article=getArticle($Politics5);
	$Politics5Title=getTitle($Politics5Article,$Politics5Length);
	
	//Politics6
	$Politics6=$Politics[count($Politics)-6];
	$Politics6Length=strlen($Politics6)+1;
	$Politics6.="/*";
	$Politics6=glob($Politics6);
	
	$Politics6Pic=getPic($Politics6);
 	$Politics6Caption=getCaption($Politics6);
	$Politics6Article=getArticle($Politics6);
	$Politics6Title=getTitle($Politics6Article,$Politics6Length);
	
	//Politics7
	$Politics7=$Politics[count($Politics)-7];
	$Politics7Length=strlen($Politics7)+1;
	$Politics7.="/*";
	$Politics7=glob($Politics7);
	
	$Politics7Pic=getPic($Politics7);
 	$Politics7Caption=getCaption($Politics7);
	$Politics7Article=getArticle($Politics7);
	$Politics7Title=getTitle($Politics7Article,$Politics7Length);
	
	//Politics8
	$Politics8=$Politics[count($Politics)-8];
	$Politics8Length=strlen($Politics8)+1;
	$Politics8.="/*";
	$Politics8=glob($Politics8);
	
	$Politics8Pic=getPic($Politics8);
 	$Politics8Caption=getCaption($Politics8);
	$Politics8Article=getArticle($Politics8);
	$Politics8Title=getTitle($Politics8Article,$Politics8Length);
	///END OF POLITICS----------------------------------------------------------------------->
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
		
<h1 style="font-size:40px; color:#059bd8;margin-bottom:-10px;text-align: center;">Politics</h1>
<!-- Main Display -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <div id="featured_slide">
        <ul id="featurednews">
          <li><img src="<?php echo $Politics1Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $Politics1Title; ?></h2>
              <p><?php echo $Politics1Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$Politics1Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
          <li><img src="<?php echo $Politics2Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $Politics2Title; ?></h2>
              <p><?php echo $Politics2Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$Politics2Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
		  <li><img src="<?php echo $Politics3Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $Politics3Title; ?></h2>
              <p><?php echo $Politics3Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$Politics3Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
		  <li><img src="<?php echo $Politics4Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $Politics4Title; ?></h2>
              <p><?php echo $Politics4Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$Politics4Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
		  <li><img src="<?php echo $Politics5Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $Politics5Title; ?></h2>
              <p><?php echo $Politics5Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$Politics5Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
        </ul>
      </div>
	 
    </div>
	
    <div class="column">
      <ul class="latestnews">
        <li><img src="<?php echo $Politics6Pic; ?>" alt="" style="height:100px;width:100px;" />
          <p><strong><a href="<?php echo "viewPageTest.php?article=".$Politics6Article; ?>"><?php echo $Politics6Title; ?></a></strong></br><?php echo $Politics6Caption;?></p>
        </li>
        <li><img src="<?php echo $Politics7Pic; ?>" alt="" style="height:100px;width:100px;" />
          <p><strong><a href="<?php echo "viewPageTest.php?article=".$Politics7Article; ?>"><?php echo $Politics7Title; ?></a></strong></br><?php echo $Politics7Caption;?></p>
        </li>
        <li class="last"><img src="<?php echo $Politics8Pic; ?>" alt="" style="height:100px;width:100px;" />
          <p><strong><a href="<?php echo "viewPageTest.php?article=".$Politics8Article; ?>"><?php echo $Politics8Title; ?></a></strong></br><?php echo $Politics8Caption;?></p>
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