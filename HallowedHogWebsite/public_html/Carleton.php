<!DOCTYPE html >
<html lang="en">
<head>
	<title>The Hallowed Hog-Carleton</title>
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
	//Carleton Section------------------------------------------------------------------------------>
	////////////////////////////////////////////////////////////////////////////////////////////////
	$Carleton = glob('archives/Carleton/*');
	
	//Carleton1
	$Carleton1=$Carleton[count($Carleton)-1];
	$Carleton1Length=strlen($Carleton1)+1;
	$Carleton1.="/*";
	$Carleton1=glob($Carleton1);
	
	$Carleton1Pic=getPic($Carleton1);
 	$Carleton1Caption=getCaption($Carleton1);
	$Carleton1Article=getArticle($Carleton1);
	$Carleton1Title=getTitle($Carleton1Article,$Carleton1Length);
	
	//Carleton2
	$Carleton2=$Carleton[count($Carleton)-2];
	$Carleton2Length=strlen($Carleton2)+1;
	$Carleton2.="/*";
	$Carleton2=glob($Carleton2);
	
	$Carleton2Pic=getPic($Carleton2);
 	$Carleton2Caption=getCaption($Carleton2);
	$Carleton2Article=getArticle($Carleton2);
	$Carleton2Title=getTitle($Carleton2Article,$Carleton2Length);
	
	//Carleton3
	$Carleton3=$Carleton[count($Carleton)-3];
	$Carleton3Length=strlen($Carleton3)+1;
	$Carleton3.="/*";
	$Carleton3=glob($Carleton3);
	
	$Carleton3Pic=getPic($Carleton3);
 	$Carleton3Caption=getCaption($Carleton3);
	$Carleton3Article=getArticle($Carleton3);
	$Carleton3Title=getTitle($Carleton3Article,$Carleton3Length);
	
	//Carleton4
	$Carleton4=$Carleton[count($Carleton)-4];
	$Carleton4Length=strlen($Carleton4)+1;
	$Carleton4.="/*";
	$Carleton4=glob($Carleton4);
	
	$Carleton4Pic=getPic($Carleton4);
 	$Carleton4Caption=getCaption($Carleton4);
	$Carleton4Article=getArticle($Carleton4);
	$Carleton4Title=getTitle($Carleton4Article,$Carleton4Length);
	
	//Carleton5
	$Carleton5=$Carleton[count($Carleton)-5];
	$Carleton5Length=strlen($Carleton5)+1;
	$Carleton5.="/*";
	$Carleton5=glob($Carleton5);
	
	$Carleton5Pic=getPic($Carleton5);
 	$Carleton5Caption=getCaption($Carleton5);
	$Carleton5Article=getArticle($Carleton5);
	$Carleton5Title=getTitle($Carleton5Article,$Carleton5Length);
	
	//Carleton6
	$Carleton6=$Carleton[count($Carleton)-6];
	$Carleton6Length=strlen($Carleton6)+1;
	$Carleton6.="/*";
	$Carleton6=glob($Carleton6);
	
	$Carleton6Pic=getPic($Carleton6);
 	$Carleton6Caption=getCaption($Carleton6);
	$Carleton6Article=getArticle($Carleton6);
	$Carleton6Title=getTitle($Carleton6Article,$Carleton6Length);
	
	//Carleton7
	$Carleton7=$Carleton[count($Carleton)-7];
	$Carleton7Length=strlen($Carleton7)+1;
	$Carleton7.="/*";
	$Carleton7=glob($Carleton7);
	
	$Carleton7Pic=getPic($Carleton7);
 	$Carleton7Caption=getCaption($Carleton7);
	$Carleton7Article=getArticle($Carleton7);
	$Carleton7Title=getTitle($Carleton7Article,$Carleton7Length);
	
	//Carleton8
	$Carleton8=$Carleton[count($Carleton)-8];
	$Carleton8Length=strlen($Carleton8)+1;
	$Carleton8.="/*";
	$Carleton8=glob($Carleton8);
	
	$Carleton8Pic=getPic($Carleton8);
 	$Carleton8Caption=getCaption($Carleton8);
	$Carleton8Article=getArticle($Carleton8);
	$Carleton8Title=getTitle($Carleton8Article,$Carleton8Length);
	///END OF CARLETON----------------------------------------------------------------------->
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
      
          <h1>
              <a href="index.php">
                  <span style="font-size:x-large; color:black; font-weight:bold;vertical-align:57%;"><b>T</b>he</span><span style="color:red;font-weight:bold">H</span>allowed <span style="color:red;font-weight:bold">H</span>og
              </a>
          </h1>
      
          <p>Carleton's Official Satirical News Source</p>
    </div>
    <!--<span style="margin-left:500px;margin-top:-50px;">-->
		<a href="https://www.facebook.com/TheHallowedHog">
            <i class="fa fa-facebook-square fa-5x" style="position:absolute;left:82%;top:5px;color:red"></i>
		<a href="https://twitter.com/TheHogCU"><i class="fa fa-twitter fa-5x" style="position:absolute;left:90%;top:5px;color:red" ></i>
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
	
<h1 style="font-size:40px; color:#059bd8;margin-bottom:-10px;text-align: center;">Carleton</h1>
<!-- Main Display -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <div id="featured_slide">
        <ul id="featurednews">
          <li><img src="<?php echo $Carleton1Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $Carleton1Title; ?></h2>
              <p><?php echo $Carleton1Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$Carleton1Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
          <li><img src="<?php echo $Carleton2Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $Carleton2Title; ?></h2>
              <p><?php echo $Carleton2Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$Carleton2Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
		  <li><img src="<?php echo $Carleton3Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $Carleton3Title; ?></h2>
              <p><?php echo $Carleton3Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$Carleton3Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
		  <li><img src="<?php echo $Carleton4Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $Carleton4Title; ?></h2>
              <p><?php echo $Carleton4Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$Carleton4Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
		  <li><img src="<?php echo $Carleton5Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $Carleton5Title; ?></h2>
              <p><?php echo $Carleton5Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$Carleton5Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
        </ul>
      </div>
	 
    </div>
	
    <div class="column">
      <ul class="latestnews">
        <li><img src="<?php echo $Carleton6Pic; ?>" alt="" style="height:100px;width:100px;" />
          <p><strong><a href="<?php echo "viewPageTest.php?article=".$Carleton6Article; ?>"><?php echo $Carleton6Title; ?></a></strong></br><?php echo $Carleton6Caption;?></p>
        </li>
        <li><img src="<?php echo $Carleton7Pic; ?>" alt="" style="height:100px;width:100px;" />
          <p><strong><a href="<?php echo "viewPageTest.php?article=".$Carleton7Article; ?>"><?php echo $Carleton7Title; ?></a></strong></br><?php echo $Carleton7Caption;?></p>
        </li>
        <li class="last"><img src="<?php echo $Carleton8Pic; ?>" alt="" style="height:100px;width:100px;" />
          <p><strong><a href="<?php echo "viewPageTest.php?article=".$Carleton8Article; ?>"><?php echo $Carleton8Title; ?></a></strong></br><?php echo $Carleton8Caption;?></p>
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