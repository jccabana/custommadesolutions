<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script type="text/javascript">document.getElementsByTagName('html')[0].className += ' js';</script>
<link rel="stylesheet" type="text/css" href="media/stylesheets/style.css" />
<link rel="stylesheet" type="text/css" href="media/stylesheets/easycolumn.css" />
<link href='http://fonts.googleapis.com/css?family=Kreon:400,700' rel='stylesheet' type='text/css'>
<!--[if IE 7]><link href="media/stylesheets/style-ie7.css" rel="stylesheet" type="text/css" /><![endif]-->
<!--[if IE 8]><link href="media/stylesheets/style-ie8.css" rel="stylesheet" type="text/css" /><![endif]-->


<title>Custom Made Solutions, Inc.</title>

<link rel="stylesheet" type="text/css" href="media/scripts/libs/shadowbox/shadowbox.css" />

<script type="text/javascript" src="media/scripts/libs/jquery.js"></script>
<script type="text/javascript" src="media/scripts/libs/shadowbox/shadowbox.js"></script>
<script type="text/javascript" src="media/scripts/libs/jquery.roundabout.js"></script>
<script type="text/javascript" src="media/scripts/libs/jquery.superfish.js"></script>
<script type="text/javascript" src="media/scripts/libs/jquery.quicksand.js"></script>
<script type="text/javascript" src="media/scripts/libs/jquery.color.js"></script>
<script type="text/javascript" src="media/scripts/libs/jquery.glowing.js"></script>
<script type="text/javascript" src="media/scripts/placeholder.js"></script>
<script type="text/javascript" src="media/scripts/slider.js"></script>
<script type="text/javascript" src="media/scripts/imgload.js"></script>
<script type="text/javascript" src="media/scripts/tooltip.js"></script>
<script type="text/javascript" src="media/scripts/config.js"></script>
<script type="text/javascript" src="media/scripts/common.js"></script>

</head>

<body>
<div id="wrapper"> 
	<div id="container">
		<div id="header">
			<h1><a href="index.php"><img src="media/cms/cmslogo.png" height="243" width="1002" /></a></h1>
            <div id="nav">
				<ul>
					<li <? if($page == "home"){ echo 'class="current"'; } ?>><a href="index.php"><span>HOME</span></a></li>
					<li <? if($page == "about"){ echo 'class="current"'; } ?>><a href="about.php"><span>ABOUT US</span></a></li>
					<li <? if($page == "services"){ echo 'class="current"'; } ?>><a href="services.php"><span>SERVICES</span></a></li>
					<li <? if($page == "products"){ echo 'class="current"'; } ?>><a href="products.php"><span>PRODUCTS</span></a></li>
					<li <? if($page == "gallery"){ echo 'class="current"'; } ?>><a href="gallery.php"><span>PROJECT GALLERY</span></a></li>
					<li <? if($page == "contact"){ echo 'class="current last-child"'; }else{ echo 'class="last-child"'; } ?>><a href="contact.php"><span>CONTACT</span></a></li>
				</ul>
			</div>
			<!-- #nav -->			
		</div>
		<!-- #header - end -->