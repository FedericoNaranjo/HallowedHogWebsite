<?php
	$name = $_GET['nameHidden'];
	$id=$_GET['id'];
	$idURL = $id.".txt";
	//echo("NAME".$name);
	//echo("ID".$id);
	

	$code = file_get_contents($idURL);
	//echo("URL is."+$idURL);
	//echo $code;
	
	

	
?>

<script>
	/////////////////////////////////////////////////////////////////set cookies
	var code='<?php echo $code;?>';
	var name='<?php echo $name;?>';
	var id='<?php echo $id;?>';
	
	document.cookie = 'name' + "=" + name + ";";
	document.cookie = 'id' + "=" + id + ";";
	document.cookie = 'code' + "=" + code + ";";
	
	//alert("name is "+name+"id is "+id);
	
	//alert("NAMEJOIN:"+readCookie('name'));
	//alert("IDJOIN:"+readCookie('id'));
	//alert("CodeJOIN:"+readCookie('code'));
	
	
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