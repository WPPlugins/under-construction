<?php

/**
 * @author admin
 * @copyright 2010
 */
$plugin_dir = plugins_url().'/under_construction';


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$options['title']?></title>
<style type="text/css">
body
{
	padding:0px;
	margin:0px;
	background-color:#8DC73F;
}
#sky
{
	background-color:#97E1FF;
	background-image:url(<?=$plugin_dir?>/images/rocket_bg.gif);
	background-repeat:repeat-x;
	height:499px;
	width:100%;
}
#rocket
{
	right:150px;
	float:right;
	position:relative;
	top:-180px;
	height:250px;
	width:150px;
	background-image:url(<?=$plugin_dir?>/images/rocket_rocket.gif);
}
#main
{
	padding:20px;
	width:460px;
	height:260px;
	float:left;
	position:relative;
	top:-230px;
	left:150px;
	background-color:white;
	outline-style:solid;
	outline-color:#999;
	outline-width:1px;
	border-color:white;
	border-style:solid;
	border-width:1px;
	background-image:url(<?=$plugin_dir?>/images/rocket_main.gif);
	background-repeat:repeat-x;
}
#updates, #login
{
	cursor:pointer;
	position:absolute;
	top:0px;
	height:30px;
	background-color:white;
	font-family:Verdana, Geneva, sans-serif;
	text-align:center;
	color:#666;
	font-size:16px;
	padding-top:5px;
	-moz-border-radius-topleft: 0px;
	-moz-border-radius-topright: 0px;
	-moz-border-radius-bottomright: 10px;
	-moz-border-radius-bottomleft: 10px;
	border-top-left-radius: 0px;
	border-top-right-radius: 0px;
	border-bottom-right-radius: 10px;
	border-bottom-left-radius: 10px;
}
#updates
{
	left:200px;
	width:200px;
}
#login
{
	right:200px;
	width:100px;
}
#updates:hover, #login:hover
{
	color:#333;
	text-decoration:underline;
}
#heading
{
	height:60px;
	color: #949289;
	font: normal normal normal 24px/normal Georgia, 'Times New Roman', Times, serif;

}
#message
{
	height:150px;
	color: #949289;
	font: normal normal normal 16px/normal Georgia, 'Times New Roman', Times, serif;
}
#social
{
	min-height:50px;
	height:auto;
	padding:1px;
	width:460px;
}
#social a
{
	cursor:pointer;
	float:left;
	height:50px;
	width:50px;
	margin-left:5px;
	opacity:0.5;
	-webkit-transition-duration: 0.33s;
	-webkit-transition-property: opacity;
	
}
#social a:hover
{
	opacity:1;
}
<?=social_media_style() ?>
</style>
</head>

<body>
<?php if($options['updates'] == "on") { echo('<div id="updates">Receive updates</div>');} ?>
<?php if($options['password_bypass'] == "on") { echo('<div id="login">Login</div>');} ?>
<div id="sky"></div>
<div id="main">
	<div id="heading"><?=$options['title']?></div>
    <div id="message"><?=$options['message']?></div>
    <div id="social">
        <?=social_media_html()?>
    </div>
</div>
<div id="rocket"></div>
</body>
</html>
