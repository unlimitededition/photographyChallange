<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Photography Challenge</title>
<link rel="shortcut icon" href="icons-30_low.png" type="image/x-icon" />
<meta name="author" content="Alvaro Trigo Lopez" />
<meta name="description" content="fullPage plugin by Alvaro Trigo. Pure javascript version of full screen slider." />
<meta name="keywords"  content="fullpage,jquery,alvaro,trigo,plugin,fullscren,screen,full,iphone5,apple,pure,javascript,slider,hijacking" />
<meta name="Resource-type" content="Document" />


<link rel="stylesheet" type="text/css" href="javascript.fullPage.css" />

<style>

/* Reset CSS
 * --------------------------------------- */
body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,
form,fieldset,input,textarea,p,blockquote,th,td
{
	padding: 0;
	margin: 0;
}
a
{
	text-decoration:none;
}
table
{
	border-spacing: 0;
}
fieldset,img
{
	border: 0;
}
address,caption,cite,code,dfn,em,strong,th,var {
	font-weight: normal;
	font-style: normal;
}
strong
{
	font-weight: bold;
}
ol,ul
{
	list-style: none;
	margin:0;
	padding:0;
}
caption,th
{
	text-align: left;

}
h1,h2,h3,h4,h5,h6
{
	font-weight: normal;
	font-size: 100%;
	margin:0;
	padding:0;
	color:#444;
}
q:before,q:after
{
	content:'';
}
abbr,acronym
{
	border: 0;
}


/* Custom CSS
 * --------------------------------------- */

a:link
{
	color: black;
    text-decoration: none;
}
a:visited
{
	color: black;
    text-decoration: none;
}
a:hover
{
	color: black;
    text-decoration: underline;
}
a:active
{
	color: black;
    text-decoration: underline;
}

/* HEADINGS */

h1
{
	line-height: 120%;
	font-size: 46px;
	font-weight:bold;
}
h2
{
	line-height: 120%;
	font-size: 24px;
	font-weight:bold;
}
h3
{
	line-height: 120%;
	font-size: 24px;
	font-weight: normal;	
}
h4
{
	line-height: 120%;
	font-size: 18px;
	font-weight: normal;	
}
h5
{
	
}
p
{
	line-height: 120%;
	font-size: 24px;
	font-weight: light;	
}

body
{
	font-family: arial,helvetica;
	color: #F2F2F2;
}
.content
{
	position: relative;
	top: 50%;
	transform: translateY(-50%);
	text-align: center;
}

</style>
</head>
<body>


<div id="fullpage">
	<div class="section" id="section0" style="background-color: #FF6A00;">
		<?php include('intro.php'); ?>
	</div>
	<div class="section" id="section1" style="background-color: #D9E021;">
		<?php include('rules.php'); ?>
	</div>
	<div class="section" id="section2" style="background-color: #0000FF;">
		<?php include('tips.php'); ?>
	</div>
	<div class="section" id="section3" style="background-color: #29AEBA;">
		<?php include('upload.php'); ?>
	</div>
	<div class="section" id="section4" style="background-color: #ED1C24;">
		<?php include('brief.php'); ?>
	</div>
	<div class="section" id="section5" style="background-color: #29AEBA;">
		<?php include('gallery.php'); ?>
	</div>
	<div class="section" id="section6" style="background-color: #ED1E79;">
		<?php include('win.php'); ?>
	</div>
</div>

<script type="text/javascript" src="javascript.fullPage.js"></script>
<script type="text/javascript">
	fullpage.initialize('#fullpage', {
		anchors: ['Intro', 'Rules', 'Tips', 'Upload', 'Brief', 'Gallery', 'Winners'],
		menu: '#menu',
		css3:true
	});

</script>

</body>
</html>