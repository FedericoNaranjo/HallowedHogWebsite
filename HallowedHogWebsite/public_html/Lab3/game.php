<!DOCTYPE html>
<html>
<head>
	<style>
		#gameContainer
		{
			width:300px;
			//height:200px;
			border: 3px solid navy;
			text-align:center;
		}
		/*Styling for display*/
		#results
		{
			background:white;//#F5FAFF;
			width:100%;
			height:50px;
		}

		/*Make display text large*/
		textarea {
		   font-size: 20pt;
		   font-family: Arial;
		   resize:none;
		   disabled=true;
		   background:white;//#F5FAFF;
		   border:0;
		   text-align:center;
		} 
		
		/*Make output close together
		ul, li 
		{
			margin: 0; 
		}
	</style>
</head>
<body>
	<textarea id="idDisplay" rows="1" cols="14" style="background:#EDEDCC; border: 1px solid black;"></textarea>
	<div id="gameContainer">
		<div id="results">
			<textarea disabled rows="1" cols="3" id="display1" style="margin-left:-18px;"></textarea>
			<textarea disabled rows="1" cols="3" id="display2" style="margin-left:28px;"></textarea>
			<textarea disabled rows="1" cols="3" id="display3" style="margin-left:32px;"></textarea>
		</div>
		
		<!--Create Buttons-->
		<table style="width:100%">
		   <tr>
			<td><button id="B1" style="width:90px;" onclick="Set('B1')" >B</button></td>
			 <td><button id="B2" style="width:90px;"onclick="Set('B2')">B</button></td> 
			 <td><button id="B3" style="width:90px;"onclick="Set('B3')">B</button></td> 
		   </tr>
		   <tr>
			<td><button id="R1" style="width:90px;"onclick="Set('R1')">R</button></td>
			 <td><button id="R2" style="width:90px;"onclick="Set('R2')">R</button></td> 
			 <td><button id="R3" style="width:90px;"onclick="Set('R3')">R</button></td> 
		   </tr>
		   <tr>
			<td><button id="G1" style="width:90px;"onclick="Set('G1')">G</button></td>
			 <td><button id="G2" style="width:90px;"onclick="Set('G2')">G</button></td> 
			 <td><button id="G3" style="width:90px;"onclick="Set('G3')">G</button></td> 
		   </tr>
		</table> 
		<!-- OK/SEND Button-->
		<button id="OK" onclick="check()">OK</button>
	</div>
	<p id="output" style="width:270px;"></p>

</body>
<script>
	/////////////////////////////////////////////////////////////////set cookies

	  document.getElementById("idDisplay").value=readCookie('id');
	/*alert("NAMEGAME:"+readCookie('name'));
	alert("IDGAME:"+readCookie('id'));
	alert("CodeGAME:"+readCookie('code'));*/
	
	//function to get a cookie(value) by its name
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
	
	//Check server for response
	function check()
	{
		var name=readCookie('name');
		var id=readCookie('id');
		var g1= document.getElementById("display1").value;
		var g2= document.getElementById("display2").value;
		var g3= document.getElementById("display3").value;
		
		
		
		console.log(name + " " + id+" "+g1+" "+g2+" "+g3+" ");
		var req  = new XMLHttpRequest();
		req.open("GET", "server.php?name="+name+"&id="+id+"&g1="+g1+"&g2="+g2+"&g3="+g3, false);
		
		req.onreadystatechange = function() {
		  if (req.readyState == 4 && req.status == 200) {
			var response = req.responseText;
			document.getElementById("output").innerHTML=response;
			if(document.getElementById("output").innerHTML.indexOf("GAME OVER")>-1)
				{	
					document.getElementById("gameContainer").style.visibility='hidden';
					document.getElementById("output").style.marginTop = "-150px";
				}
			console.log(r);
			//document.getElementById("front").style.display="none";
			//document.getElementById("second").style.display="block";
		  }
		}				
		req.send();
			
	}
	
	//Set position and letter
		function Set(input)
		{
			var letter=String(input[0]);
			var position=input[1];
			if(position==1)
				var display='display1';
			if(position==2)
				var display='display2';
			if(position==3)
				var display='display3';
			
			document.getElementById(display).value=letter;//set display to new state
			
			
		}
		
		//function to change chaacter in string
		function setStringCharacter(string,locationIndex,character)
		{
			if(locationIndex > string.length-1) 
			{
				 return string;
			}
			return (string.substr(0,locationIndex) + character + string.substr(locationIndex+1));
		}
		
		//periodically update
		setInterval(function(){getUpdate()},5000);
		
		function getUpdate()
		{
			var name='UPDATE';
			var id=readCookie('id');
			var req  = new XMLHttpRequest();
			req.open("GET", "server.php?name="+name+"&id="+id, false);
			//alert("GETTING FROM" +"result"+ id+".txt");
			req.onreadystatechange = function() {
			  if (req.readyState == 4 && req.status == 200) {
				var response = req.responseText;
				document.getElementById("output").innerHTML=response;
				if(document.getElementById("output").innerHTML.indexOf("GAME OVER")>-1)
				{	
					document.getElementById("gameContainer").style.visibility='hidden';
					document.getElementById("output").style.marginTop = "-150px";
				}
				console.log(r);
				//document.getElementById("front").style.display="none";
				//document.getElementById("second").style.display="block";
			  }
			}				
			req.send();
		}
	
	//location.replace("game.php");
</script>

<?php

?>