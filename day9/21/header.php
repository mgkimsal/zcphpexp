<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html> 
<head> 
    <meta http-equiv="content-type" content="text/html; charset=utf-8"> 
    <title>21/pontoon/blackjack</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/3.2.0/build/cssreset/reset.css" type="text/css"> 
    <link rel="stylesheet" href="http://yui.yahooapis.com/3.2.0/build/cssfonts/fonts.css" type="text/css"> 
    <link rel="stylesheet" href="http://yui.yahooapis.com/3.2.0/build/cssgrids/grids.css" type="text/css"> 
 
<style> 
html, body {
height: 100%;
}
body {
  background-color: #f8f8f8;
}
#doc {
background-color: #f8f8f8;
margin:auto; /* center in viewport */
width: 100%; /* fix page width */
font-family: helvetica,arial,freesans,clean,sans-serif;
font-size: 24px;
}
         
/* arbitrary content styling */
#hd {
padding-top: 8px;
padding-left: 20px;
height: 50px;
background-color: #223;
}
#hd h1 {
color: #f9f9f9;
font-size: 32px;
float:left;
}
#hd h1 a {
	text-decoration:none;
	color: #f9f9f9;
	font-size: 32px;
	float:left;
}

#hd .menu {
  float:right;
color: #f9f9f9;
font-size: 20px;
padding-top: 5px;
padding-right: 20px;
}
.menu li {
-webkit-border-radius: 8px;
-moz-border-radius: 8px;
border-radius: 8px;
list-style-type: none;
display: inline;
float:left;
margin-right: 80px;
padding: 5px;
}


.menu li a {
	color: #f9f9f9;
	text-decoration:none;
}


.menu li:hover {
  background-color: #f9f9f9;
  color: #223;
}
.menu li:hover a {
  background-color: #f9f9f9;
  color: #223;
}
.content {
  background-color: #f8f8f8;
}
#ft {
margin-top: 50px;
background-color: #f8f8f8;
background-image: url("gradient.png");
background-repeat: repeat-x;
height: 160px; 
padding-left: 40px;
padding-top:20px;
}
#ft li {
  font-size: 16px;
}
#ft h2 {
  text-shadow: 1px 1px #fefefe;
}


#ft .col1 {
  
  width: 24%;
float:left;
}
#ft .col2 {

  width: 24%;
float:left;
}
#ft .col3 {

  width: 24%;
float:left;
}
#ft .col4 {
  width: 24%;
float:left;

}


#main {
  margin: 0 auto;
  margin-top: 30px;
  width: 960px;
  border: thin solid #f7f7f6;
overflow:auto;
-webkit-border-radius: 8px;
-moz-border-radius: 8px;
border-radius: 8px;
  padding: 10px;

}
#main h1 {
  font-size: 42px;
  text-align:center;
  font-weight: bold;
}
#main #left {
  float:left;
  width: 60%;
}
#main #right{
  float:right;
  width: 40%;
  text-align:center;
}
#right h2 {
  text-align:center;
}

#main li {
  padding-top: 10px;
  margin-left: 40px;
  font-size: 32px;
}

#pricepoints li {
	margin-left: inherit;
	text-align:center;
}

.cards {
  width: 380px;
}
.card {
float:left;
margin-right: 20px;
}
#message {
  overflow:none;
  width:70%;
  margin: 0 auto;
  text-align:center;
  font-size: 24px;
  background-color: #d66;
  color: #f0f0f0;

}
</style> 
 

</head> 
<body id="doc"> 
    <div id="hd"> 
        <h1><a href="index.php">21/pontoon/blackjack</a></h1> 
<div class="menu">
<ul>
<li><a href="?restart=y">restart</a></li>
</ul>
</div>
    </div> 
 
    <div class="content">

