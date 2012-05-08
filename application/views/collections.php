<!-- source code : https://github.com/esheripov/Fresh-Connection-Brand -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  	<script type="text/javascript" src="<?php echo "$base"?>js/jquery.ad-gallery.js"></script>
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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo "$base"?>css/fctv.css">
    <link rel="stylesheet" type="text/css" href="<?php echo "$base"?>css/jquery.ad-gallery.css">
  	
 	<script type="text/javascript">
	
	var collectionState = 1; 
	
  $(function() {
    $('img.image1').data('ad-desc', 'Whoa! This description is set through elm.data("ad-desc") instead of using the longdesc attribute.<br>And it contains <strong>H</strong>ow <strong>T</strong>o <strong>M</strong>eet <strong>L</strong>adies... <em>What?</em> That aint what HTML stands for? Man...');
    $('img.image1').data('ad-title', 'Title through $.data');
    $('img.image4').data('ad-desc', 'This image is wider than the wrapper, so it has been scaled down');
    $('img.image5').data('ad-desc', 'This image is higher than the wrapper, so it has been scaled down');
    var galleries = $('.ad-gallery').adGallery();
    $('#switch-effect').change(
      function() {
        galleries[0].settings.effect = $(this).val();
        return false;
      }
    );
    $('#toggle-slideshow').click(
      function() {
        galleries[0].slideshow.toggle();
        return false;
      }
    );
    $('#toggle-description').click(
      function() {
        if(!galleries[0].settings.description_wrapper) {
          galleries[0].settings.description_wrapper = $('#descriptions');
        } else {
          galleries[0].settings.description_wrapper = false;
        }
        return false;
      }
    );
  });
  
  
  $(document).ready(function() 
  {
  	// put all your jQuery goodness in here.
   
	$('#sprsummer2011').mouseover(function() 
	{
		document.getElementById('sprsummer2011').style.opacity = "1"; 
	});
	$('#sprsummer2011').mouseout(function() 
	{
		if(collectionState != 0) document.getElementById('sprsummer2011').style.opacity = ".3"; 
		else document.getElementById('sprsummer2011').style.opacity = "1"; 
	});
	
	$('#fcbstreet2012').mouseover(function() 
	{
		document.getElementById('fcbstreet2012').style.opacity = "1"; 
	});
	
	$('#fcbstreet2012').mouseout(function() 
	{
		if(collectionState != 1) document.getElementById('fcbstreet2012').style.opacity = ".3"; 
		else document.getElementById('fcbstreet2012').style.opacity = "1"; 
	});
 
   
  });
  
  
  function showSprSummer2011()
  {
	  if(collectionState == 0) return; 
	  collectionState = 0; 
  }
	  
   function showFCBStreet2012()
   {
	   
	   if(collectionState == 1) return; 
	  
	  collectionState = 1; 
	  document.getElementById('fcb_street_2012_gallery').style.visibility = "visible"; 
	  document.getElementById('fcb_street_2012_gallery').style.position = ""; 
	  
	  document.getElementById('spr_summer_gallery').style.visibility = "hidden"; 
	  document.getElementById('spr_summer_gallery').style.position = "absolute"; 
	  
	  document.getElementById('sprsummer2011').style.opacity = ".3"; 
	  document.getElementById('fcbstreet2012').style.opacity = "1"; 
	  }
	  
	  function showSprSummer2011()
   {
	   
	   if(collectionState == 0) return; 
	  
	  collectionState = 0; 
	  document.getElementById('fcb_street_2012_gallery').style.visibility = "hidden"; 
	  document.getElementById('fcb_street_2012_gallery').style.position = "absolute"; 
	  
	  document.getElementById('spr_summer_gallery').style.visibility = "visible"; 
	  document.getElementById('spr_summer_gallery').style.position = ""; 
	  
	  document.getElementById('sprsummer2011').style.opacity = "1"; 
	  document.getElementById('fcbstreet2012').style.opacity = ".3"; 
	  
	   
	  }
  </script>

  <style type="text/css">
  * {
    font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, Arial, sans-serif;
    color: #333;
    line-height: 140%;
  }
  select, input, textarea {
    font-size: 1em;
  }
  body {
    padding: 30px;
    font-size: 70%;
    width: 800px;
  }
  h2 {
    margin-top: 1.2em;
    margin-bottom: 0;
    padding: 0;
    border-bottom: 1px dotted #dedede;
  }
  h3 {
    margin-top: 1.2em;
    margin-bottom: 0;
    padding: 0;
  }
  .example {
    border: 1px solid #CCC;
    background: #f2f2f2;
    padding: 10px;
  }
  ul {
    list-style-image:url(<?php echo "$base"?>images/list-style.gif);
  }
  pre {
    font-family: "Lucida Console", "Courier New", Verdana;
    border: 1px solid #CCC;
    background: #f2f2f2;
    padding: 10px;
  }
  code {
    font-family: "Lucida Console", "Courier New", Verdana;
    margin: 0;
    padding: 0;
  }

  #gallery {
    padding: 30px;
	  }
  #descriptions {
    position: relative;
    height: 50px;
    background: #EEE;
    margin-top: 10px;
    width: 1000px;
    padding: 10px;
    overflow: hidden;
  }
    #descriptions .ad-image-description {
      position: absolute;
    }
      #descriptions .ad-image-description .ad-description-title {
        display: block;
      }

.toolbar li {

display:inline;
margin:0;
padding:.5em;
}

#sprsummer2011:hover, #fcbstreet2012:hover
{
	opacity:1;
}

#sprsummer2011
{
	opacity:.3;
}

  </style>
	<title>FCB : Collections</title>
</head>

    <?php 
          //include('db_connect.php'); 
          include('header.php');
          include('footer.php');
          include('contact_form.php');
		  include('popupcontact.php'); 
    ?>
    
    
    
   
    <br /><br /><br />
    
    <div id = "spr_summer_gallery" style="visibility:hidden; position:absolute"  >
        <div id="gallery" class="ad-gallery" style="position:relative">
          <div class="ad-image-wrapper">
          </div>
          
          <div class="ad-nav">
            <div class="ad-thumbs">
              <ul class="ad-thumb-list">
                <li>
                  <a href="<?php echo "$base"?>images/spr_sum2011/S:S_201101.jpg">
                    <img src="<?php echo "$base"?>images/spr_sum2011/thumbs/S:S_201101.jpg" class="image0">
                  </a>
                </li>
                <li>
                  <a href="<?php echo "$base"?>images/spr_sum2011/S:S_201102.jpg">
                    <img src="<?php echo "$base"?>images/spr_sum2011/thumbs/S:S_201102.jpg" class="image0">
                  </a>
                </li>
                <li>
                  <a href="<?php echo "$base"?>images/spr_sum2011/S:S_201103.jpg">
                    <img src="<?php echo "$base"?>images/spr_sum2011/thumbs/S:S_201103.jpg" class="image0">
                  </a>
                </li>
                <li>
                  <a href="<?php echo "$base"?>images/spr_sum2011/S:S_201104.jpg">
                    <img src="<?php echo "$base"?>images/spr_sum2011/thumbs/S:S_201104.jpg" class="image0">
                  </a>
                </li>
                <li>
                  <a href="<?php echo "$base"?>images/spr_sum2011/S:S_201105.jpg">
                    <img src="<?php echo "$base"?>images/spr_sum2011/thumbs/S:S_201105.jpg" class="image0">
                  </a>
                </li>
                <li>
                  <a href="<?php echo "$base"?>images/spr_sum2011/S:S_201106.jpg">
                    <img src="<?php echo "$base"?>images/spr_sum2011/thumbs/S:S_201106.jpg" class="image0">
                  </a>
                </li>
                <li>
                  <a href="<?php echo "$base"?>images/spr_sum2011/S:S_201107.jpg">
                    <img src="<?php echo "$base"?>images/spr_sum2011/thumbs/S:S_201107.jpg" class="image0">
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
    
    <div id = "fcb_street_2012_gallery"  >
        <div id="gallery" class="ad-gallery" style="position:absolute;">
          <div class="ad-image-wrapper">
          </div>
          
          <div class="ad-nav">
            <div class="ad-thumbs">
              <ul class="ad-thumb-list">
                <li>
                  <a href="<?php echo "$base"?>images/street2012/FCBSTREET_201201.JPG">
                    <img src="<?php echo "$base"?>images/street2012/thumbs/FCBSTREET_201201.JPG" class="image0">
                  </a>
                </li>
                <li>
                  <a href="<?php echo "$base"?>images/street2012/FCBSTREET_201202.JPG">
                    <img src="<?php echo "$base"?>images/street2012/thumbs/FCBSTREET_201202.JPG" class="image0">
                  </a>
                </li>
                <li>
                  <a href="<?php echo "$base"?>images/street2012/FCBSTREET_201203.JPG">
                    <img src="<?php echo "$base"?>images/street2012/thumbs/FCBSTREET_201203.JPG" class="image0">
                  </a>
                </li>
                <li>
                  <a href="<?php echo "$base"?>images/street2012/FCBSTREET_201204.JPG">
                    <img src="<?php echo "$base"?>images/street2012/thumbs/FCBSTREET_201204.JPG" class="image0">
                  </a>
                </li>
                <li>
                  <a href="<?php echo "$base"?>images/street2012/FCBSTREET_201205.JPG">
                    <img src="<?php echo "$base"?>images/street2012/thumbs/FCBSTREET_201205.JPG" class="image0">
                  </a>
                </li>
                <li>
                  <a href="<?php echo "$base"?>images/street2012/FCBSTREET_201206.JPG">
                    <img src="<?php echo "$base"?>images/street2012/thumbs/FCBSTREET_201206.JPG" class="image0">
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
    
    <ul class="toolbar" style="position:absolute; left:700px; top:80px">
    	<li style="" >
        	<div>
     <div id="sprsummer2011" onClick="showSprSummer2011()" style="cursor:pointer; background-color:#0CF; border-radius:15px; width:300px; height:190px; padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;">
                <img width="300px" height="168.5px" src="<?php echo "$base"?>images/spr_sum2011/cover.jpg" style="border-radius:; opacity:1px; border:thin; border-color:white" />
                <div style="color:white; text-align:center"><img src="<?php echo "$base"?>images/spring_summer_2011.gif" width="186" height="30" /></div>
            </div>
            </div>
        </li>
        <li style="" >
        	<div>
     <div id="fcbstreet2012" onClick="showFCBStreet2012()" style="cursor:pointer; background-color:#CCC; border-radius:15px; width:300px; height:190px; padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;">
                <img width="300px" height="168.5px" src="<?php echo "$base"?>images/street2012/cover.jpg" style="border-radius:; opacity:1px" />
                <div style="color:white; text-align:center"><img src="<?php echo "$base"?>images/fcb_stree_2012.gif" width="186" height="30"/></div>
            </div>
            </div>
        </li>
    </ul>
    
<link rel="shortcut icon" href="<?php echo "$base"?>images/favicon.ico" type="image/x-icon"> 
</html>