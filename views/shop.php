<!-- source code : https://github.com/esheripov/Fresh-Connection-Brand -->w

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
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>FCB : Shop</title>
</head>
<style>html, body { height: 100% }</style>

<body>
<?php include('header.php');?>
<iframe name="inlineframe" src="http://shop.myfreshconnection.com/" style="position:absolute; top:25px" frameborder="0" width="100%" height="100%"></iframe>
</body>


 <script>
 
 	document.getElementById("navtools").style.top = "0px"; 
 
 </script>
 
</html>
