<!DOCTYPE html >
<html lang="en">
<head>
	<title>The Hallowed Hog-Sports</title>
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
	
	//Sports Section------------------------------------------------------------------------------>
	////////////////////////////////////////////////////////////////////////////////////////////////
	$Sports = glob('archives/Sports/*');
	
	//Sports1
	$Sports1=$Sports[count($Sports)-1];
	$Sports1Length=strlen($Sports1)+1;
	$Sports1.="/*";
	$Sports1=glob($Sports1);
	
	$Sports1Pic=getPic($Sports1);
 	$Sports1Caption=getCaption($Sports1);
	$Sports1Article=getArticle($Sports1);
	$Sports1Title=getTitle($Sports1Article,$Sports1Length);
	
	//Sports2
	$Sports2=$Sports[count($Sports)-2];
	$Sports2Length=strlen($Sports2)+1;
	$Sports2.="/*";
	$Sports2=glob($Sports2);
	
	$Sports2Pic=getPic($Sports2);
 	$Sports2Caption=getCaption($Sports2);
	$Sports2Article=getArticle($Sports2);
	$Sports2Title=getTitle($Sports2Article,$Sports2Length);
	
	//Sports3
	$Sports3=$Sports[count($Sports)-3];
	$Sports3Length=strlen($Sports3)+1;
	$Sports3.="/*";
	$Sports3=glob($Sports3);
	
	$Sports3Pic=getPic($Sports3);
 	$Sports3Caption=getCaption($Sports3);
	$Sports3Article=getArticle($Sports3);
	$Sports3Title=getTitle($Sports3Article,$Sports3Length);
	
	//Sports4
	$Sports4=$Sports[count($Sports)-4];
	$Sports4Length=strlen($Sports4)+1;
	$Sports4.="/*";
	$Sports4=glob($Sports4);
	
	$Sports4Pic=getPic($Sports4);
 	$Sports4Caption=getCaption($Sports4);
	$Sports4Article=getArticle($Sports4);
	$Sports4Title=getTitle($Sports4Article,$Sports4Length);
	
	//Sports5
	$Sports5=$Sports[count($Sports)-5];
	$Sports5Length=strlen($Sports5)+1;
	$Sports5.="/*";
	$Sports5=glob($Sports5);
	
	$Sports5Pic=getPic($Sports5);
 	$Sports5Caption=getCaption($Sports5);
	$Sports5Article=getArticle($Sports5);
	$Sports5Title=getTitle($Sports5Article,$Sports5Length);
	
	//Sports6
	$Sports6=$Sports[count($Sports)-6];
	$Sports6Length=strlen($Sports6)+1;
	$Sports6.="/*";
	$Sports6=glob($Sports6);
	
	$Sports6Pic=getPic($Sports6);
 	$Sports6Caption=getCaption($Sports6);
	$Sports6Article=getArticle($Sports6);
	$Sports6Title=getTitle($Sports6Article,$Sports6Length);
	
	//Sports7
	$Sports7=$Sports[count($Sports)-7];
	$Sports7Length=strlen($Sports7)+1;
	$Sports7.="/*";
	$Sports7=glob($Sports7);
	
	$Sports7Pic=getPic($Sports7);
 	$Sports7Caption=getCaption($Sports7);
	$Sports7Article=getArticle($Sports7);
	$Sports7Title=getTitle($Sports7Article,$Sports7Length);
	
	//Sports8
	$Sports8=$Sports[count($Sports)-8];
	$Sports8Length=strlen($Sports8)+1;
	$Sports8.="/*";
	$Sports8=glob($Sports8);
	
	$Sports8Pic=getPic($Sports8);
 	$Sports8Caption=getCaption($Sports8);
	$Sports8Article=getArticle($Sports8);
	$Sports8Title=getTitle($Sports8Article,$Sports8Length);
	///END OF SPORTS----------------------------------------------------------------------->
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
	
<h1 style="font-size:40px; color:#059bd8;margin-bottom:-10px;text-align: center;">Sports</h1>
<!-- Main Display -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <div id="featured_slide">
        <ul id="featurednews">
          <li><img src="<?php echo $Sports1Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $Sports1Title; ?></h2>
              <p><?php echo $Sports1Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$Sports1Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
          <li><img src="<?php echo $Sports2Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $Sports2Title; ?></h2>
              <p><?php echo $Sports2Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$Sports2Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
		  <li><img src="<?php echo $Sports3Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $Sports3Title; ?></h2>
              <p><?php echo $Sports3Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$Sports3Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
		  <li><img src="<?php echo $Sports4Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $Sports4Title; ?></h2>
              <p><?php echo $Sports4Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$Sports4Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
		  <li><img src="<?php echo $Sports5Pic; ?>" alt="" style="width:100%; height:100%;"/>
            <div class="panel-overlay">
              <h2><?php echo $Sports5Title; ?></h2>
              <p><?php echo $Sports5Caption; ?><br />
                <a href="<?php echo "viewPageTest.php?article=".$Sports5Article; ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
        </ul>
      </div>
	 
    </div>
	
    <div class="column">
      <ul class="latestnews">
        <li><img src="<?php echo $Sports6Pic; ?>" alt="" style="height:100px;width:100px;" />
          <p><strong><a href="<?php echo "viewPageTest.php?article=".$Sports6Article; ?>"><?php echo $Sports6Title; ?></a></strong></br><?php echo $Sports6Caption;?></p>
        </li>
        <li><img src="<?php echo $Sports7Pic; ?>" alt="" style="height:100px;width:100px;" />
          <p><strong><a href="<?php echo "viewPageTest.php?article=".$Sports7Article; ?>"><?php echo $Sports7Title; ?></a></strong></br><?php echo $Sports7Caption;?></p>
        </li>
        <li class="last"><img src="<?php echo $Sports8Pic; ?>" alt="" style="height:100px;width:100px;" />
          <p><strong><a href="<?php echo "viewPageTest.php?article=".$Sports8Article; ?>"><?php echo $Sports8Title; ?></a></strong></br><?php echo $Sports8Caption;?></p>
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