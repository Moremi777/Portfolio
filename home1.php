<?php

$home = "<!doctype html>
<html>
    
<head>
    <title> New Website </title>
    <link href = \"styles.css\" rel = \"stylesheet\" type = \"text/css\">
</head>
    
<body>
    
    <div id=\"headerArea\"> <img src = \"dbz.jpg\" width = \"80px\" height = \"75px\" /></div>
    
        <div id=\"sideArea\"> <a href = \"home1.php\"> Home </a> <br> <a href = \"about1.php\"> About </a> <br> <a href = \"contact1.php\"> Contact </a> </div>
    
        <div id=\"textArea\"> 
        	<form action = 'http://localhost/lessons/practice/home1.php'method ='POST' id = 'form1'>  Name:
			<input type = 'text' name = 'name'> </input> Surname:
			<input type = 'text' surname = 'surname'> </input> <br/>
			</form>
        </div>
    
    <div class = \"clear\" ></div>
      
    <div id=\"footerArea\"> Copyright 2022 My Website</div>
    
    
</body>    
    
</html>";

echo $home;

?>