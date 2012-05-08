<!-- source code : https://github.com/esheripov/Fresh-Connection-Brand -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo "$base"?>css/footer.css">
</head>
<body>
<center>
    <div id="footer" style=" background-color:#FFF; opacity:.85; border-radius:15px; z-index:1">
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
            <li><a onclick="loadTerms()" style="cursor:pointer">Terms & Conditions</a></li>
            <li><a onclick="loadPrivacy()" style="cursor:pointer">Privacy</a></li>
            <li><a style="cursor:not-allowed">Careers</a></li>
            <li><a onclick="$('#contactable_inner').click();" style="cursor:pointer">Contact Us</a></li>
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
		document.getElementById('terms').style.height = "0px";
		document.getElementById('privacy').style.height = "0px";  	
	}
	function loadPrivacy()
	{
		loadPopup(); 
		document.getElementById('privacy').style.position = ""; 
		document.getElementById('privacy').style.visibility = "visible"; 
		document.getElementById('terms').style.visibility = "hidden"; 
		document.getElementById('terms').style.position = "absolute"; 
		centerPopup();
		document.getElementById('privacy').style.height = "0px"; 
		document.getElementById('terms').style.height = "0px";  	
	}
	function hidePopup()
	{
		disablePopup(); 	
	}


</script>