<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="alexaVerifyID" content="aj6iu-GC1XzCquo-zsl3gOlgPeI" />
<meta name="google-site-verification" content="eBExl19sdO2bIrSM9_N1d48976h6BqwhZa2xoji3vj8" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<meta name="keywords" content="Music, KFC"/>
<meta name="description" content="KFC MUSIC." />
<link href="css/kfc.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
<!-- PNG FIX -->
<script type="text/javascript" src="js/jquery.pngFix.pack.js"></script> 
<script type="text/javascript" src="js/jquery.pngFix.js"></script>
<!-- SLIDERS -->
<link rel="stylesheet" type="text/css" href="css/slider/jquery.slider.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="css/slider/jquery.slider.ie6.css" />
<![endif]-->
<script type="text/javascript" src="js/slider/jquery.slider.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/jquery.effects.core.js"></script>
<script type="text/javascript" src="js/jquery.effects.shake.js"></script>

<script type="text/javascript">
jQuery(document).ready(function($) {
  $(".slider").slideshow({
    width      : 640,
    height     : 265,
    duration      : 800,
    speed         : 300,
    delay         : 6500,
    transition : 'square'
  });
  $(".slider2").slideshow({
    width      : 610,
    height     : 265,
    duration      : 800,
    speed         : 300,
    delay         : 6500,
    transition : 'square'
  });
  
});
</script>
<!-- CURRENT PAGE HIGHTLIGHT MENU -->
<script language="javascript" src="js/highlight.js"></script>
<!-- ANIMATION HEADER & FOOTER -->
<title>KFC MUSIC</title>
</head>

<body>
	<div id="gradient-top">
    <div id="gradient-bottom">
	<div id="bghead">
    	<div id="bgfoot">
        	<div id="wrapper">
            	<?php include("header.php");?>
                <div id="container">
                	<?php 
					if($_GET['menu']=='artist'){
						include("artist.php");
					}else if($_GET['menu']=='komunitas'){ 
						include("komunitas.php");
                    }else if($_GET['menu']=='artikel'){ 
						include("artikel.php");
                    }else if($_GET['menu']=='download'){ 
						include("download.php");
                    }else if($_GET['menu']=='kontes'){ 
						include("kontes.php");
                    }else if($_GET['menu']=='rbt'){ 
						include("rbt.php");
                    }else if($_GET['menu']=='kalender'){ 
						include("kalender.php");
                    }else if($_GET['menu']=='profile'){ 
						include("profile.php");
                    }else if($_GET['menu']=='band'){ 
						include("band.php");
                    }else{ 
						include("home.php");
                    }?>
                </div><!-- #container -->
            	<?php include("footer.php");?>
            </div><!-- #wrapper -->
        </div><!-- #bgfoot -->
    </div><!-- #bghead -->
    </div><!-- #gradient-bottom -->
    </div><!-- #gradient-top -->
    <div id="radio">
    	<div id="radio-box">
        	<img src="images/radio.jpg" />
        </div>
    </div>
</body>
</html>