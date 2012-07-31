<?php


if (isset($_SESSION['connect_db'])){

// Let's say we are connecting to a MySQL DB,. include this file from a very simple check, not secure
// but also not meant to be complex
include "connect.php";

include "logged_in.php";


// Below is some simple code that establishes a CSS wrapper and some text formatting
}


include "config.php";


<style type="text/css">
<!--
a:link {
	font:Verdana, Geneva, sans-serif;
	font-size:14px;
	color:#FFF;
	text-decoration:none;
}

a:hover {
	font:Verdana, Geneva, sans-serif;
	font-size:14px;
	color:#CCC;
	text-decoration:none;
}

a:visited {
	font:Verdana, Geneva, sans-serif;
	font-size:14px;
	color:#FFF;
	text-decoration:none;
}

html, body{
		width: 100%;
		height: 100%;
		margin: 0px auto;
		padding: 0;

		}
		#bg-css{
		position:absolute;
		height: 1300px;
		width: 100%;
		margin: 0px auto;
		padding: 0;
		z-index: -1;
		}

#background{
position:absolute;
height:100%;
width: 100%;
margin: 0;
padding: 0;
} 

#wrapper0 {
	
	position: relative; 
	width: 1000px; 
	height: 60px;
	margin: 0px auto; 
	text-align: left;
	overflow: hidden;
    }


#wrapper {
	
	position: relative; 
	width: 1050px; 
	height: 1250px;
	margin: 0px auto; 
	text-align: left;
	overflow: hidden;
    }
.auto-style1 {
	margin-top: 0px;
}
-->
</style>

<body>


<!-- Add a simple black background that won't pixelate-->

<div>
  <img id = "bg-css" src = "blackbg.png" style="left: 2px; top: -9px;" />
</div>


<!-- Ensure all other HTML, PHP, and JS code is executed within the CSS wrapper -->

<div id = wrapper>


<div style = "position: absolute; left: 140px; top: 0px; font-family:'Verdana'; color: #000000; font-size: 16px; font-weight: normal; font-style: normal; z-index:0;">

<!-- Apply a background image to the wrapper --> 
<img src = "some_image.png" /> 


<div style = "position: absolute; left: 0px; top: 20px; width: 200px; font-family:'Verdana'; color: #FFFFFF; font-size: 24px; width: 100%; font-weight: bold; font-style: normal; z-index:-1;">

Hello World!

</div>



</div>


</body>
