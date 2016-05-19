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
<div style="width:100%;margin-top:5px;">
	<div style="width:50%;margin-left:25%;">
		<div style="background:#E4EFF2;border: 5px solid black;border-radius: 25px;">
			<h1 style="font-size:40px; color:#059bd8;text-align: center !important;margin-top:-1px">Hitler's Mustache</h1>
			<img src="advicePictures/HitlersMustacheProfile.jpg" alt="" style="height:200px;width:200px;margin-left:10%" /> 
			<p style="margin-left:300px;margin-top:-200px;font-size:21px">
				<b>Name:</b> Hitler's Mustache</br>
				<b>Area of Expertise:</b> Growing, looking good, being a mustache, ethnic cleansing(jk)</br>
				<b>Qualifications:</b> Extremely smooth, stylish, not responsible for any related genocides</br>
				<b>Date of Birth: </b> Puberty,1902</br>
			</p>
		</div>
		</br>
		<div style="background:#E4EFF2; border: 5px solid black;border-radius: 25px;">
			<form name="contactForm" method="post" action="askHitlersMustache.php" style="border:none" onsubmit="return validateForm()">
				<p style="font-size:25px; text-align:center !important;margin-bottom:-3px;color:#059bd8;font-weight:bold;">Ask Hitlers Mustache a question!</p>
				<table width="450px;border:none">
					
					<tr>
					 
					 <td valign="top">
					  
					  <label for="name"><span style="font-size:17;font-weight:bold;">Name</span></label>
					 
					 </td>
					 
					 <td valign="top">
					 
					  <input  type="text" name="name" maxlength="50" size="30">
					 
					 </td>
					 
					</tr>
					
					<tr>
	 
					 <td valign="top">
					 
					  <label for="email"><span style="font-size:17;font-weight:bold;margin-top:-10px;">Email Address</span></br>(to notify when question answered)</label>
					 
					 </td>
					 
					 <td valign="top">
					 
					  <input  type="text" name="email" maxlength="80" size="30">
					 
					 </td>
					 
					</tr>
					 
					<tr>
					 
					 <td valign="top">
					 
					  <label for="question"><span style="font-size:17;font-weight:bold;">Question</span></label>
					 
					 </td>
					 
					 <td valign="top">
					 
					  <textarea  name="question" maxlength="1000" cols="35" rows="6" style="resize: none;"></textarea>
					 
					 </td>
					 
					</tr>
					 
					<tr>
					 
					 <td colspan="2" style="text-align:center">
					 
					  <input type="submit" value="Submit">
					 
					 </td>
					 
					</tr>
					 
				</table>
				 
		</form>
		</div>
		</br>
		<div style="background:#E4EFF2;text-align:center;border: 5px solid black;border-radius: 25px;">
			<p style="font-size:25px; text-align:center !important;margin-bottom:0px;color:#059bd8;font-weight:bold;">Latest advice by Hitlers Mustache</p>
			<?php 
				$AdviceColumns=getAdviceColumns('archives/Advice/HitlersMustache/*'); //sorted list of advice columns by this author 
			?>
			<?php 
				foreach($AdviceColumns as $col)
				{
					echo'<div style="border:5px solid black;border-radius: 25px;margin:5%;padding:5px;background:white;">';//<div>
						echo'<p style="text-align:left;font-size:17px;">'; //<p>
							echo '<span style="float:left;font-weight:bold;font-size:19px;">'.$col->title.'</span>'.'<span style="float:right;font-weight:bold;font-size:19px;">'.$col->date.'</span></br></br>';
							echo $col->contents.'</br></br>';
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
			
			//sort them below based on date
			function sortByAdviceDate($column1, $column2) 
			{
				return $column2->date - $column1->date;
			}
			usort($AdviceList, 'sortByAdviceDate');
			return $AdviceList;
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