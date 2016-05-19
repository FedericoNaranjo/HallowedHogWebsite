<?php
	$name = $_GET['name'];
	$id = time();
	$id.=".txt";
	
	/*
		If the method in the form is POST, then to get the values
		we would use the array $_POST[ ]
	*/
	
	$code=createCode();
	//echo"data is: ".$code;
	//echo"id is".$id;
	
	file_put_contents($id, $code);// name. " ".$password."\n", FILE_APPEND | LOCK_EX);
	
	
	
	
	
	
	//functions below
	
	
	function createCode()
	{
		 //Start Game; generate code to look for
	   $Colours=['B','R','G'];
	  
	   $code=array();//empty array for the code to find
	   
	   //create code
	   for($i=0;$i<3;$i++)
	   { 
		$randomNumber=rand(0,2);
		$colour=$Colours[$randomNumber];
		//echo" ".$colour." ";
		array_push($code,$colour);
	   }
	   
	   //Get number of occurances of each colour in code
	   $codeG=0;
	   $codeB=0;
	   $codeR=0;
	   for($i=0;$i<3;$i++)
	   {
		switch($code[$i])
		{
		 case 'G':
		  $codeG+=1;
		  break;
		 case 'B':
		  $codeB+=1;
		  break;
		 case 'R':
		  $codeR+=1;
		  break;
		}
	   }
		$dest=$_POST['n'];
		echo $dest;
	   
		$data=$code[0].$code[1].$code[2];
		return $data;
	}
	
?>

<script>
	/////////////////////////////////////////////////////////////////set cookies
	var code='<?php echo $code;?>';
	var name='<?php echo $name;?>';
	var id='<?php echo $id;?>';
	//id=id.substring(7,id.length);
	id=id.substring(0,id.length-4);
	document.cookie = 'name' + "=" + name + ";";
	document.cookie = 'id' + "=" + id + ";";
	document.cookie = 'code' + "=" + code + ";";
	
	
	
	//alert("NAME:"+readCookie('name'));
	//alert("ID:"+id);
	//alert("Code:"+readCookie('code'));
	
	
	function readCookie(name) 
	{
		var nameEQ = name + "=";
		var ca = document.cookie.split(';');
		for(var i=0;i < ca.length;i++) 
		{
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1,c.length);
			if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
		}
		return null;
	}
	
	location.replace("game.php");
</script>

<?php

 
?>