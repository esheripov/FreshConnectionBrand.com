<!-- source code : https://github.com/esheripov/Fresh-Connection-Brand -->

<?php
 
	// check if user is logged in
	if(isset($_SESSION['LOGIN']))
	{?>
<script>
    	document.getElementById('loginbar').style.visibility = "hidden";
		document.getElementById('loggedinbar').style.visibility = "visible"; 
		<?PHP 
		if($_SESSION['JUSTLOGGEDIN'] == 1)
		{
			$_SESSION['JUSTLOGGEDIN'] = 0;	?>
			document.getElementById('loginWelcomeLabel').style.visibility = "visible";
		<?PHP 
		}?> 
    	</script>
	<?php }
	
	//notify user if they had just registered
	if($_SESSION['USER_REGISTRATION'] == 1)
	{
		$_SESSION['USER_REGISTRATION']  = 0; 
		?>
        <script>
		document.getElementById("regSuccessfulLabel").style.visibility = "visible";
      	</script>
        <?php
	}
	else if($_SESSION['USER_REGISTRATION'] == 2)
	{
		$_SESSION['USER_REGISTRATION']  = 0; 
		?>
		<script>
		document.getElementById("regform").style.visibility = "visible";
		document.getElementById("regform").style.overflow = "auto";

		document.getElementById("navlinks").style.visibility = "hidden";

		document.getElementById("regFormErrorLabel").style.position = "relative";
        document.getElementById("regFormErrorLabel").style.visibility = "visible";
        </script>
	<?php }
	
	if($_SESSION['LOGIN_ERROR'] == 1)
	{
		$_SESSION['LOGIN_ERROR'] = 0;?>
		<script>
        document.getElementById('invalidLoginLabel').style.visibility = "visible"; 
        
        </script>
	<?PHP }
?>