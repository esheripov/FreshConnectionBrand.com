<!-- Source code can be found at https://github.com/esheripov/Fresh-Connection-Brand -->

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
	<link rel="stylesheet" type="text/css" href="<?php echo "$base"?>css/index.css">
	<title>FCB | Fresh Connection Brand</title>
</head>
<body>
    <?php 
          //include('db_connect.php'); 
          //include('register_submit.php'); 
          include('header.php');
		  include('imageslider.php'); 
          include('footer.php');
		  //include('popupcontact.php'); 
          //include('login_reg_notif.php');
          include('contact_form.php');
		  include('popupcontact.php'); 
    ?>
</body>
<link rel="shortcut icon" href="<?php echo "$base"?>images/favicon.ico" type="image/x-icon"> 
</html>