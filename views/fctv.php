<!-- source code : https://github.com/esheripov/Fresh-Connection-Brand -->

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
	<title>FCTV&reg; | Fresh Connection Brand TV</title>
</head>
<body>
    <?php 
          //include('db_connect.php'); 
          include('header.php');
		  include('fctvvideos.php'); 
          include('footer.php');
          include('contact_form.php');
		  include('popupcontact.php'); 
    ?>
   
<br /><br /><br /><br /><br /><br /><br />

</body>
<link rel="shortcut icon" href="<?php echo "$base"?>images/favicon.ico" type="image/x-icon"> 
</html>