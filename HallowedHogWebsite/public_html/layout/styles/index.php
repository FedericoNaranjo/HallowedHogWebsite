<!DOCTYPE html >
<html lang="en">
<head>
	<title>The Haunted Hog</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
	
	<!--Layout Dropdown-->
	<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
	
	<!--Font-Awesome Icons-->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css">
	
	<!--Display Image Scripts-->
	<script type="text/javascript" src="layout/scripts/galleryviewthemes/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="layout/scripts/galleryviewthemes/jquery.timers.1.2.js"></script>
	<script type="text/javascript" src="layout/scripts/galleryviewthemes/jquery.galleryview.2.1.1.min.js"></script>
	<script type="text/javascript" src="layout/scripts/galleryviewthemes/jquery.galleryview.setup.js"></script>
	
	<!--Architects Daughter Font-->
	<link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
	
	<!--Live Twitter Feed Script-->
	<script>
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
		if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
		fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
	</script>
	
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
	$Carleton5=glob($Carleton4);
	
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
	$Politics5=glob($Politics4);
	
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
	$WorldwideAffairs5=glob($WorldwideAffairs4);
	
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
	$PopCulture5=glob($PopCulture4);
	
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
	$Sports5=glob($Sports4);
	
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
	$Comics5=glob($Comics4);
	
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
<div class="wrapper">
  <div id="header">
    <div class="fl_left">
      <h1><a href="index.html"><span style="color:red;font-weight:bold">H</span>allowed <span style="color:red;font-weight:bold">H</span>og</a></h1>
      <p>Carleton's Official Satirical News Source</p>
    </div>
    <span style="margin-left:500px;">
		<a href="https://www.facebook.com/TheHallowedHog"><i class="fa fa-facebook-square fa-5x" style="color:red; font:font-awe"></i>
		<a href="https://twitter.com/TheHogCU"><i  class="fa fa-twitter fa-5x" style="color:red;" ></i>
	</span>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li class="active2"><a href="index.html">Home</a></li>
        <li><a href="#">Categories</a>
          <ul>
		  	<li><a href="#">Carleton</a></li>
            <li><a href="Politics.php">Politics</a></li>
            <li><a href="Sports.php">Sports</a></li>
            <li><a href="WorldWideAffairs.php">Worldwide Affairs</a></li>
			<li><a href="PopCulture.php">Pop Culture</a></li>
			<li><a href="Comics.php">Comics</a></li>
          </ul>
        </li>
        <li><a href="About.php">About</a></li>
		<li><a href="ContactUs.php">Contact Us</a></li>
		<li class="last"><a href="archives">Archives</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
	






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