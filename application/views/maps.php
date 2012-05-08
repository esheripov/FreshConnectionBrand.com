<!-- source code : https://github.com/esheripov/Fresh-Connection-Brand -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3.3&amp;sensor=false"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo "$base"?>js/vendor/markermanager.js"></script>
<script type="text/javascript" src="<?php echo "$base"?>js/vendor/StyledMarker.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo "$base"?>js/vendor/jquery.metadata.js"></script>
<script type="text/javascript" src="<?php echo "$base"?>js/jquery.jmapping.js"></script>

<style>

#map {
	z-index:0;
	position:absolute;
	width: 100%;
	height: 100%;
	float: left;
	border-radius:15p;
}
#map-side-bar {
	float: left;
	width: 160px;
	padding: 7px 20px;
}
#leaders_logo
{
}
#leaders_logo:hover
{
	opacity:.5;
}

</style>
</head>
<body>

<div id="map"></div>

<div id="map-side-bar" style="position:absolute; left:0%; top:15%; visibility:hidden">
  <div class="map-location" data-jmapping="{id: 1, point: {lng: -87.634297, lat: 41.894485}, category: 'fashion'}">
    <a href="#" id="leader" class="map-link"><img id="leaders_logo" src="<?php echo "$base"?>images/leaders_logo.gif" width="200" height="46" /></a>
    <div class="info-box">
      <p>      
        <font style="font-weight:bold">Leaders 1354</font> <br />
        <img src="<?php echo "$base"?>images/leaders_logo.gif" /><br />
        <a href="http://www.leaders1354.com/">Website</a><br />
        672 North Wells Street, Chicago, IL 60654, United States <br />
        (312) 787-7144 <br />
      </p>
    </div>
  </div>
</div>
    
<script type="text/javascript">
 $(document).ready(function(){
  $('#map').jMapping({
    force_zoom_level: 15,
    default_zoom_level: 15,
	always_show_markers: true, 

  });
  $('#leader').click(); 
});
</script>

</body>
</html>