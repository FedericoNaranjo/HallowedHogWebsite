<!DOCTYPE html >
<html lang="en">
<head>
	<title>The Hallowed Hog</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
	
	<!--Layout Dropdown-->
	<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
	
	
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
	///END OF CARLETON----------------------------------------------------------------------->
	//////////////////////////////////////////////////////////////////////////////////////////

	
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
	///END OF POLITICS----------------------------------------------------------------------->
	//////////////////////////////////////////////////////////////////////////////////////////


	
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
	///END OF WORLDWIDEAFFAIRS----------------------------------------------------------------------->
	//////////////////////////////////////////////////////////////////////////////////////////


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
	///END OF POPCULTURE----------------------------------------------------------------------->
	//////////////////////////////////////////////////////////////////////////////////////////


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
	///END OF SPORTS----------------------------------------------------------------------->
	//////////////////////////////////////////////////////////////////////////////////////////
	
	
	//Comics Section------------------------------------------------------------------------------>
	////////////////////////////////////////////////////////////////////////////////////////////////
	$Comics = glob('archives/Comics/*');
	//Comics1
	$Comics1=$Comics[count($Comics)-1];
	$Comics1Length=strlen($Comics1)+1;
	$Comics1.="/*";
	$Comics1=glob($Comics1);
	
	$Comics1Pic=getPic($Comics1);
 	$Comics1Caption=getCaption($Comics1);
	$Comics1Article=getArticle($Comics1);
	$Comics1Title=getTitle($Comics1Article,$Comics1Length);
	
	///END OF COMICS----------------------------------------------------------------------->
	//////////////////////////////////////////////////////////////////////////////////////////



	?>
	
	<!--Make Iframe send links to entire page, not just here-->
	<base target="_parent" />
</head>

<body id="top" >

<div class="wrapper">
 
  <div id="hpage_cats" >
   
      <div class="fl_left">
      
          <h2><a href="Carleton.php">Carleton &raquo;</a></h2>
          
          <!-- made image clickable link on May 12, 2016 -->
          <a href="<?php echo "viewPageTest.php?article=".$Carleton1Article; ?>">
            <img src="<?php echo $Carleton1Pic;?>" alt="" style="height:100px;width:100px;"/>
          </a>
          
          <p><strong>
              <a href="<?php echo "viewPageTest.php?article=".$Carleton1Article; ?>"><?php echo $Carleton1Title;?>
              </a>
          </strong></p>
      
          <p><?php echo $Carleton1Caption ;?></p>
      </div>
      
        
      <div class="fl_right">
            
          <h2><a href="Sports.php">Sports &raquo;</a></h2>
          
          <!-- made image clickable link on May 12, 2016 -->
          <a href="<?php echo "viewPageTest.php?article=".$Sports1Article; ?>">
            <img src="<?php echo $Sports1Pic;?>" alt="" style="height:100px;width:100px;"/>
          </a>
          
          <p><strong>
              <a href="<?php echo "viewPageTest.php?article=".$Sports1Article; ?>"><?php echo $Sports1Title;?>
              </a> 
          </strong></p>
      
          <p><?php echo $Sports1Caption ;?></p>
      
      </div>
    
      
      <br class="clear" />
    
      
      <div class="fl_left">
          
          <h2><a href="WorldWideAffairs.php">Worldwide Affairs &raquo;</a></h2>
          
          <!-- made image clickable link on May 12, 2016 -->
          <a href="<?php echo "viewPageTest.php?article=".$WorldwideAffairs1Article; ?>">
            <img src="<?php echo $WorldwideAffairs1Pic;?>" alt="" style="height:100px;width:100px;"/>
          </a>
    
          <p><strong>
              <a href="<?php echo "viewPageTest.php?article=".$WorldwideAffairs1Article; ?>"><?php echo $WorldwideAffairs1Title;?>
              </a>
          </strong></p>
      
          <p><?php echo $WorldwideAffairs1Caption ;?></p>
    
      </div>
    
      
      <div class="fl_right">
      
          <h2><a href="Comics.php">Comics &raquo;</a></h2>
          
          <!-- made image clickable link on May 12, 2016 -->
          <a href="<?php echo "viewPageTest.php?article=".$Comics1Article; ?>">
            <img src="<?php echo $Comics1Pic;?>" alt="" style="height:100px;width:100px;"/>
          </a>
          
          <p><strong>
              <a href="<?php echo "viewPageTest.php?article=".$Comics1Article; ?>"><?php echo $Comics1Title;?>
              </a>
          </strong></p>
          
      <p><?php echo $Comics1Caption ;?></p>
    </div>
      
      
    <br class="clear" />
      
      
	<div class="fl_left">
        
        <h2><a href="PopCulture.php">Pop Culture &raquo;</a></h2>
        
        <!-- made image clickable link on May 12, 2016 -->
        <a href="<?php echo "viewPageTest.php?article=".$PopCulture1Article; ?>">
            <img src="<?php echo $PopCulture1Pic;?>" alt="" style="height:100px;width:100px;"/>
        </a>
        <p><strong>
            <a href="<?php echo "viewPageTest.php?article=".$PopCulture1Article; ?>">
                <?php echo $PopCulture1Title;?>
            </a>
        </strong></p>
        
        <p><?php echo $PopCulture1Caption ;?></p>
    </div>
      
      
    <div class="fl_right">
        
        <h2><a href="Politics.php">Politics &raquo;</a></h2>
        
        <!-- made image clickable link on May 12, 2016 -->
        <a href="<?php echo "viewPageTest.php?article=".$Politics1Article; ?>">
            <img src="<?php echo $Politics1Pic;?>" alt="" style="height:100px;width:100px;"/>
        </a>
        
        <p><strong>
            <a href="<?php echo "viewPageTest.php?article=".$Politics1Article; ?>"><?php echo $Politics1Title;?></a>
        </strong></p>
        
        <p><?php echo $Politics1Caption ;?></p>
    
      </div>
      
      <br class="clear" />
      
</div>
    
</div>
</body>
</html>