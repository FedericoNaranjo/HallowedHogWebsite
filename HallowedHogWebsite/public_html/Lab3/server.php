<?php
	$name = $_GET['name'];
	$g1 = $_GET['g1'];
	$g2 = $_GET['g2'];
	$g3 = $_GET['g3'];
	$id=$_GET['id'];
	
	//check if this is an update
	if($name=='UPDATE')
	{
		$resultURL="result".$id.".txt";
		$guessLog=file_get_contents($resultURL);
		echo nl2br($guessLog);
	}
	else
	{
	echo nl2br($guessLog);
	
	$resultURL="result".$id.".txt";
	$code=file_get_contents($id.'.txt');
	
	$numCorrect=0;
	$c1=$code[0];
	$c2=$code[1];
	$c3=$code[2];
	
	if($g1==$c1)
		$numCorrect+=1;
	if($g2==$c2)
		$numCorrect+=1;
	if($g3==$c3)
		$numCorrect+=1;
	
	
	
	
	
	$guessText="<li>With ".$g1.",".$g2.",".$g3.", ".$name." guessed ".$numCorrect." colours.</li>"."\n";
	file_put_contents($resultURL,$guessText,FILE_APPEND|LOCK_EX);
	//check if game is done
	if($numCorrect==3)
	{
		file_put_contents($resultURL,"GAME OVER,".$name."WINS!",FILE_APPEND|LOCK_EX);
	}
	$guessLog=file_get_contents($resultURL);

	echo nl2br($guessLog);
	}

?>