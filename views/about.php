<!-- source code : https://github.com/esheripov/Fresh-Connection-Brand -->

<script src="<?php echo "$base"?>js/jquery.js" type="text/javascript"></script>
<?php 
// if session has not been established throw back to admin login page
if(!isset($_SESSION)) 
{
	?><script> window.location = "demoLogin"; </script> <?php
}
else
{
	//if not logged in make them login
	if(!isset($_SESSION['DEMO'])){ ?><script> window.location = "demoLogin"; </script><?php }
	//if session expired make them login
	elseif((time() > $_SESSION['expire'])){ ?><script> window.location = "demoLogin"; </script><?php }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>FCB : About</title>
	<meta name="csrf-param" content=""/>
    <link rel="stylesheet" type="text/css" href="<?php echo "$base"?>css/footer.css">
	<link href="<?php echo "$base"?>css/about.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="<?php echo "$base"?>css/global.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo "$base"?>css/user.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo "$base"?>css/fancyBox.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo "$base"?>css/jquery-ui.css" media="screen" rel="stylesheet" type="text/css" />
</head>

<body id="about" class="static_resources">

<?php include("header.php"); ?>
<?php include('popupcontact.php'); ?>
<?php include("contact_form.php"); ?>

	
<div id="content" style="z-index:1">
	<div class="wrapper" style="">
		<div id="main" style=" width:100%">
		<div id="page_title" class="about" style="font-family:'Blessed Day'; font-size:60px"><img src="<?php echo "$base"?>images/fcb_blessed_day.png" width="642" height="80" /></div><br /><br />
        
			<blockquote id="about_paragraph" >Fresh Connection Brand is an independent lifestyle brand founded in 2010 with a core focus on the formation of timeless
quality garments garnering adaptation from all lifestyles.<br /><br />
Inspired by the impact of the French Connection scheme during the 60's and 70's, Fresh Connection Brand pledges to
serve as the sole connection to all things fresh. Advocating the assembly of stylistic and classic designs, Fresh
Connection Brand transcends gender, race and creed in order to deliver a timeless array of tailored apparel. FRESH is a way of
life we describe as Forever Revolutionizing Expression, Style and Hustle. At Fresh Connection Brand you are the source.
Stay connected.
			</blockquote>

			<h3 id="team_title" style="color:#F00">The Team</h3>

			<div id="team_profiles" style="width:100%">

				<?php include('profiles.php'); ?>
				<div class="clearfix"></div>
	
			</div><!-- end #team_profiles -->
		</div><!-- end #main -->


		<div class="clearfix"></div>
	</div>
</div><!-- end #content -->

<center>
    <div id="footer" style=" background-color:#FFF; opacity:; border-radius:15px; height:50px">
        <ul id="footer-icons" style="list-style-type: none; display: inline; display: block;">
            <li class="icons" style="width:90; height:36; list-style-type: none; display: inline;"">
            	<a href="/">
                	<img src="<?php echo "$base"?>images/fresh_connection_cursive_logo%20tra.gif" width="81" height="36" />
                </a>
            </li>
            <li class="icons" style="list-style-type: none; display: inline;">
            	<a href="/">
            		<img src="<?php echo "$base"?>images/FC%20Cords%20%28Avatar%29%20tra.gif" width="36" height="36" />
                </a>
            </li>	
        </ul>
        <div class="clear"></div>
        <ul id="footer-nav" class="ChaletNewYorkNineteenEighty">
            <li><a href="#" onClick="loadTerms()" style="cursor:pointer">Terms & Conditions</a></li>
            <li><a href="#" onClick="loadPrivacy()" style="cursor:pointer">Privacy</a></li>
            <li><a href="" style="cursor:not-allowed">Careers</a></li>
            <li><a href="#" onClick="$('#contactable_inner').click();" style="cursor:pointer">Contact Us</a></li>
            <ul id="footer-subnav" class="ChaletNewYorkNineteenEighty">
              <li style="">&copy; 2012 Fresh Connection Brand, LLC. All Rights Reserved</li>
              <li class="flag"><a class="german" href=""><img src="<?php echo "$base"?>images/de.png" /></a></li>
              <li class="flag"><a class="france" href=""><img src="<?php echo "$base"?>images/fr.png" /></a></li>
              <li class="flag"><a class="spain"  href=""><img src="<?php echo "$base"?>images/es.png" /></a></li>
              <li class="flag"><a class="japan"  href=""><img src="<?php echo "$base"?>images/japan_flag.jpg" /></a></li>
              <li class="flag"><a class="china"  href=""><img src="<?php echo "$base"?>images/cn.png" /></a></li>
              <li class="flag"><a class="brazil" href=""><img src="<?php echo "$base"?>images/br.png" /></a></li>
              <li class="flag"><a class="russia" href=""><img src="<?php echo "$base"?>images/ru.png" /></a></li>
            </ul>
        </ul>
    </div>
</center>

</body>
<link rel="shortcut icon" href="<?php echo "$base"?>images/favicon.ico" type="image/x-icon"> 
</html>


<script>

popupStatus = 0; 

 //loading popup with jQuery magic!  
    function loadPopup(){
	//loads popup only if it is disabled  
    if(popupStatus==0){ 
    $("#backgroundPopup").css({  
    "opacity": "0.7"  
    });  
    $("#backgroundPopup").fadeIn("slow");  
    $("#popupContact").fadeIn("slow");  
    popupStatus = 1;  
    }  
    }  
	
	//disabling popup with jQuery magic!  
    function disablePopup(){  
    //disables popup only if it is enabled  
    if(popupStatus==1){  
    $("#backgroundPopup").fadeOut("slow");  
    $("#popupContact").fadeOut("slow");  
    popupStatus = 0;  
    }  
    }  
	
	    //centering popup  
    function centerPopup(){  
    //request data for centering  
    var windowWidth = document.documentElement.clientWidth;  
    var windowHeight = document.documentElement.clientHeight;  
    var popupHeight = $("#popupContact").height();  
    var popupWidth = $("#popupContact").width();  
    //centering  
    $("#popupContact").css({  
    "position": "absolute",  
    "top": windowHeight/2-popupHeight/2,  
    "left": windowWidth/2-popupWidth/2  
    });  
    //only need force for IE6  
      
    $("#backgroundPopup").css({  
    "height": windowHeight  
    });  
      
    }
	
	function loadTerms()
	{
		loadPopup(); 
		document.getElementById('terms').style.position = ""; 
		document.getElementById('terms').style.visibility = "visible"; 
		document.getElementById('privacy').style.visibility = "hidden";
		document.getElementById('privacy').style.position = "absolute";
		centerPopup();
		document.getElementById('popupContact').style.top = "15%";
	}
	function loadPrivacy()
	{
		loadPopup(); 
		document.getElementById('privacy').style.position = ""; 
		document.getElementById('privacy').style.visibility = "visible"; 
		document.getElementById('terms').style.visibility = "hidden"; 
		document.getElementById('terms').style.position = "absolute"; 
		centerPopup();
		document.getElementById('popupContact').style.top = "15%";
	}
	function hidePopup()
	{
		disablePopup(); 	
	}


</script>