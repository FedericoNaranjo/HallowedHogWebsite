<!DOCTYPE html >
<html lang="en">
<head>
	<title>The Hallowed Hog</title>
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
			height: 90px;
		
		}
		div.textContainer p 
		{
			display: inline-block;
			text-align: left;
			width:70%;
			font-size:20px;
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
		
		//Retrieve date from article root path(not pdf file)
		//Cant use getDate, PHP special function
		function getModded($path)
		{
			$mod = substr($path, ($pos = strpos($path, '2')) !== false ? $pos  : 0);//delete all before first "2" in 2YYY
			return substr($mod,0,10);
		}
			
	?>
	
	<!--PHP Referencing-->
	<?php
	//Function to get all folder paths in each directory
	$Car=glob('archives/Carleton/*');
	$World=glob('archives/WorldwideAffairs/*');
	$Sp=glob('archives/Sports/*');
	$Com=glob('archives/Comics/*');
	$Po=glob('archives/Politics/*');
	$Pop=glob('archives/PopCulture/*');
	
	//Class to deal with article paths and titles. Need because need to sort articles based on title(not pathname), but cant add value to key in array 
	//when array is already defined in glob
	class Article
	{
		//Instance variables
		public $path;//path to folder
		public $article;//article.pdf path
		public $pic;//picture path
		public $caption;//caption path
		public $modded;//article date
		
		//Constructor
		//@param $title:The article title
		//@param $path: The path to article folder in archives
		function __construct($path)
		{
			$this->path=$path;
		    $contents=glob(($this->path)."/*");
			$this->article=getArticle($contents);
			$length=strlen($path)+1;
			$this->title=getTitle($this->article,$length);
			$this->modded=getModded($this->path);
			$this->pic=getPic($contents);

		}
		
	}
	
	$All=array_merge($Car,$World,$Sp,$Com,$Po,$Pop);//merge arrays of all article categories together
	
	$Articles = array();//array of all articles
	
	foreach($All as $var) 
	{
		$path=substr($var[0], 0, -1);
		$path=$var;
		$article=new Article($path);
		$Articles[] = $article;
	}
	
	//Function to compare date of article posting(original)
	function compareModded($a, $b)
	{
		return strcmp($a->modded, $b->modded);
	}
	usort($Articles, "compareModded");
	//var_dump($Articles);
	
	//All1
	$All1=$Articles[count($All)-1]->path;
	$All1Length=strlen($All1)+1;
	$All1.="/*";
	$All1=glob($All1);
	
	$All1Pic=getPic($All1);
 	$All1Caption=getCaption($All1);
	$All1Article=getArticle($All1);
	$All1Title=getTitle($All1Article,$All1Length);
	
	//All2
	$All2=$Articles[count($All)-2]->path;
	$All2Length=strlen($All2)+1;
	$All2.="/*";
	$All2=glob($All2);
	
	$All2Pic=getPic($All2);
 	$All2Caption=getCaption($All2);
	$All2Article=getArticle($All2);
	$All2Title=getTitle($All2Article,$All2Length);
	
	//All3
	$All3=$Articles[count($All)-3]->path;
	$All3Length=strlen($All3)+1;
	$All3.="/*";
	$All3=glob($All3);
	
	$All3Pic=getPic($All3);
 	$All3Caption=getCaption($All3);
	$All3Article=getArticle($All3);
	$All3Title=getTitle($All3Article,$All3Length);
	
	//All4
	$All4=$Articles[count($All)-4]->path;
	$All4Length=strlen($All4)+1;
	$All4.="/*";
	$All4=glob($All4);
	
	$All4Pic=getPic($All4);
 	$All4Caption=getCaption($All4);
	$All4Article=getArticle($All4);
	$All4Title=getTitle($All4Article,$All4Length);
	
	//All5
	$All5=$Articles[count($All)-5]->path;
	$All5Length=strlen($All5)+1;
	$All5.="/*";
	$All5=glob($All5);
	
	$All5Pic=getPic($All5);
 	$All5Caption=getCaption($All5);
	$All5Article=getArticle($All5);
	$All5Title=getTitle($All5Article,$All5Length);
	
	//All6
	$All6=$Articles[count($All)-6]->path;
	$All6Length=strlen($All6)+1;
	$All6.="/*";
	$All6=glob($All6);
	
	$All6Pic=getPic($All6);
 	$All6Caption=getCaption($All6);
	$All6Article=getArticle($All6);
	$All6Title=getTitle($All6Article,$All6Length);
	
	//All7
	$All7=$Articles[count($All)-7]->path;
	$All7Length=strlen($All7)+1;
	$All7.="/*";
	$All7=glob($All7);
	
	$All7Pic=getPic($All7);
 	$All7Caption=getCaption($All7);
	$All7Article=getArticle($All7);
	$All7Title=getTitle($All7Article,$All7Length);
	
	//All8
	$All8=$Articles[count($All)-8]->path;
	$All8Length=strlen($All8)+1;
	$All8.="/*";
	$All8=glob($All8);
	
	$All8Pic=getPic($All8);
 	$All8Caption=getCaption($All8);
	$All8Article=getArticle($All8);
	$All8Title=getTitle($All8Article,$All8Length);

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

<!--About the Author SECTION-->
<h1 style="font-size:40px; color:#059bd8;text-align: center !important;margin-top:-1px">Advice</h1>
<div class="textContainer">
	<p>
		Our esteemed experts can help you with solid, thoughtful advice on a variety of topics. Click on an authors name to see more information, as well as their recent advice columns,
		and fill out the form to ask them a question. If you think you have what it takes to be an expert contact us at <b><i>thehallowedhog@gmail.com</b></i>!.
	</p>
</div>

<div style="width:100%;margin-top:10px;">
	<p style="font-size:25px; text-align:center !important;margin-bottom:0px;color:#059bd8;font-weight:bold;">Meet the Authors</p>
	<div>
		<div style="background:white;border: 5px solid black;border-radius: 25px; width:22.5%;margin-left:25%">
			<a href="HitlersMustacheHome.php"><img src="advicePictures/HitlersMustacheProfile.jpg" alt="" style="height:100px;width:100px;margin-left:10%-margin-top:50%;padding-top:20px;padding-left:6px;" /></a> 
			<p style="margin-left:110px;margin-top:-100px;font-size:17px">
				<b>Name:</b> Hitler's Mustache</br>
				<b>Area of Expertise:</b> Growing, looking good, being a mustache, ethnic cleansing(jk)</br>
			</p>
		</div>
		<!--
		<div style="background:white;border: 5px solid black;border-radius: 25px; width:22.5%;margin-right:25%; float:right; margin-top:-165px;">
			<img src="advicePictures/HitlersMustacheProfile.jpg" alt="" style="height:100px;width:100px;margin-left:10%-margin-top:50%;padding-top:20px;padding-left:6px;" /> 
			<p style="margin-left:110px;margin-top:-100px;font-size:17px">
				<b>Name:</b> Hitler's Mustache</br>
				<b>Area of Expertise:</b> Growing, looking good, being a mustache, ethnic cleansing(jk)</br>
			</p>
		</div>
		-->
	</div>
	
	
	<div style="width:70%;margin-left:15%;">
		
		
		</br>
		<div style="background:#E4EFF2;text-align:center;border: 5px solid black;border-radius: 25px;">
			<p style="font-size:25px; text-align:center !important;margin-bottom:0px;color:#059bd8;font-weight:bold;">Latest Advice</p>
			<?php 
				$allColumns=array();//blank array for all advice columns
				$AdviceColumns=getAllAdviceColumns('archives/Advice'); //sorted list of advice columns by all authors
				function getAllAdviceColumns($dir)
				{
					global $allColumns;
					$ffs = scandir($dir);
					foreach($ffs as $ff){
						if($ff != '.' && $ff != '..')
						{
							if(is_dir($dir.'/'.$ff)) getAllAdviceColumns($dir.'/'.$ff);
							else
							{
								array_push($allColumns,new AdviceColumn($dir.'/'.$ff));
							}
							
						}
					}
					usort($allColumns, 'sortByAdviceDate');
					return $allColumns;					
				}
				//sort them below based on date
				function sortByAdviceDate($column1, $column2) 
				{
					return $column2->date - $column1->date;
				}
					
					
				//function to return a sorted list of all advice columns by that author
				function getAdviceColumns($dir)
				{
					$lengthDir=strlen($dir)-1;
					$AuthorIndex=glob($dir);//index of author, listing all files inside
					$AdviceList=array();
					foreach($AuthorIndex as $adviceFile)
					{
						array_push($AdviceList,new AdviceColumn($adviceFile));
					}
					return $AdviceList;
				}
			?>
			<?php 
				foreach($AdviceColumns as $col)
				{
					//determine the author, get picture, set homepage link
					$author=current(explode("/", substr($col->path,16,strlen($col->path)-1)));//get author name that is listed on folder in archives
					switch($author)
					{
						case 'HitlersMustache':
							$col->authorPicture='advicePictures/HitlersMustacheProfile.jpg';
							$col->authorHome='HitlersMustacheHome.php';
							break;
						
						default:
							$col->authorPicture='advicePictures/DefaultProfile.jpg';
					}
					
					echo'<div style="border:5px solid black;border-radius: 25px;margin:5%;padding:5px;background:white;">';//<div>
						echo'<p style="text-align:left;font-size:17px;">'; //<p>
							echo '<a href="'.$col->authorHome.'"><img src="'.$col->authorPicture.'" height="60px;" width="70px;">';
							echo'<div style=";margin-top:-60px;text-align:left;font-size:17px;">';//<div>
								echo '</a><span style="float:left;font-weight:bold;font-size:19px; margin-left:70px">'.$col->title.'</span>'.'<span style="float:right;font-weight:bold;font-size:19px;">'.$col->date.'</span></br></br></br>';
							echo $col->contents.'</br></br>';
							echo '</div>';//</div>
						echo'</p>';
					echo '</div>';
				}
			?>
		</div>
			
</div>
	<?php
	
		//class to deal with advice columns
		class AdviceColumn
		{
			//Instance variables
			public $path;//path to advice column
			public $date;//article date
			public $contents;//text contents of advice
			public $title;//title of advice
			public $authorPicture;//PATH to picture of author who wrote advice(still need to use href)
			public $authorHome;//path to home page of author who wrote advice column(still need to use href)
			
			//Constructor
			//@param $path: The path to article folder in archives
			function __construct($path)
			{
				$this->path=$path;//given full and compelte path to article
				$this->contents=nl2br(file_get_contents($this->path));
				$this->date=$this->getDated();
				$this->title=$this->getTitle();
			}
			
			//get date of adivce column
			public function getDated()
			{
				return substr(strstr($this->path,'2'),0,10);
			}
			
			//get title of advice column
			public function getTitle()
			{
				$title=strstr($this->path,'2'); //remove path to folder/all before date
				$title=substr($title,11,strlen($title));//remove date
				$title=substr($title,0,strlen($title)-4);//remove .txt
				$title=str_replace('+'," ",$title);
				return $title;
			}

		}
	
	
		

		
	?>

<script>
function validateForm() {
	
    var name = document.forms["contactForm"]["name"].value;
	var question=document.forms["contactForm"]["question"].value;
	var email=document.forms["contactForm"]["email"].value;
	
	
    if (name == null || name == "") 
	{
        alert("Hitler's Mustache demands that you have a name!");
        return false;
    }
	if (question == null || question == "") 
	{
        alert("Hitler's Mustache demands that you have a question!");
        return false;
    }
	if (email == null || email == "") 
	{
        alert("Hitlers Mustache has made note of the fact that you have no email, and will allow your question, but pities you!");
    }
}
</script>

<!--Footer-->
<div style="text-align:center;width:100%;height:285px;margin:0;">
	<iframe src="footer.html" style="border:0;width:100%;height:100%;scrolling:no;overflow-y: hidden;" scrolling="no"></iframe>
</div>
</body>
</html>