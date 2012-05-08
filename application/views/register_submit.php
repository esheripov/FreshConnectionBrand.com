<!-- source code : https://github.com/esheripov/Fresh-Connection-Brand -->

<?php

$qString = sprintf("SELECT * FROM USERS 
		WHERE USERNAME ='%s' OR EMAIL ='%s'",
		mysql_real_escape_string($_POST['uname']),
		mysql_real_escape_string($_POST['email']));
	$result = mysql_query($qString); 
	
	//if any fields not set then refreshing or javascript turned off just move on
	if(!$_POST['fname'] || !$_POST['lname'] || !$_POST['email'] || !$_POST['uname'] || !$_POST['twitter'] || !$_POST['pwd'])
	{}
	else
	{
		// check if uname or email already exists 
		if($row = mysql_fetch_array($result)) { ?><script> window.location = "adminReg.php"; </script><?php die(); }
		
		// insert user info into db
		mysql_query("INSERT INTO freshconnection.USERS (USER_ID, FIRSTNAME, LASTNAME, EMAIL, USERNAME, TWITTER, PERMISSION_ID, PASSWORD) 
		VALUES(NULL,'".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['email']."', '".$_POST['uname']."', '@".$_POST['twitter']."', 2, '".$_POST['pwd']."')")or die(mysql_error()); 
		
		// notify head of engineering
		$to = "esheripov@myfreshconnection.com";
		$subject = 'Fresh Connection Brand';
		$headers = "From:  staff@myfreshconnection.com \r\n";
		$headers .= "Reply-To: staff@myfreshconnection.com \r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		$message = '<html><body>';
		$message .= '<h1></h1>';
		$message .= '</body></html>';
		$message .= '<html><body>';
		$message .= '<div>'.$_POST['fname'].' '.$_POST['lname'].' has registered as an administrator with the Fresh Connection Brand.</div><br><br>';
		$message .= '<div><b>
					 Fresh Connection Brand, LLC. <br>
		             "Forever Revolutionizing Expression, Style and Hustle" <br>
		             W: myfreshconnection.com | W: shop.myfreshconnection.com <br><br>
		
		
		             CONFIDENTIALITY NOTICE: This E-Mail transmission (and/or the documents accompanying it) is for the sole use of the intended recipient(s) of Fresh Connection Brand 
		             and may contain information protected by the attorney-client privilege, the attorney-work-product doctrine or other applicable privileges or confidentiality laws or 
		             regulations. If you are not an intended recipient, you may not review, use, copy, disclose or distribute this message or any of the information contained in this 
		             message to anyone. If you are not the intended recipient, please contact the sender by reply e-mail and destroy all copies of this message and any attachments. <br>
		             - Thank You.<b></div><br><br><br>
					 
					 
					 <center>©Fresh Connection Brand, LLC. All rights reserved</center>'; 
		$message .= "</body></html>";
		             EOF; 
		
		mail($to,$subject,$message,$headers);
		
		// notify user
		$to = $_POST['email'];
		$subject = 'Fresh Connection Brand - Admin Registration Confirmation';
		$headers = "From:  staff@myfreshconnection.com \r\n";
		$headers .= "Reply-To: staff@myfreshconnection.com \r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		$message = '<html><body>';
		$message .= '<h1></h1>';
		$message .= '</body></html>';
		$message .= '<html><body>';
		$message .= '<div>Hi '.$_POST['fname'].' '.$_POST['lname'].', <br><br>
		
					 Thank you for registering as an administrator with the Fresh Connection Brand. For now on please use your own username & password to 
					 login to the demo site. </div><br>
					 
					 <bold>Login Credentials:</bold><br>
					 username: '.$_POST['uname'].'<br>
					 password: '.$_POST['pwd'].'<br><br>';
					 
		$message .= '<div><b>
					 Fresh Connection Brand, LLC. <br>
		             "Forever Revolutionizing Expression, Style and Hustle" <br>
		             W: myfreshconnection.com | W: shop.myfreshconnection.com <br><br>
		
		
		             CONFIDENTIALITY NOTICE: This E-Mail transmission (and/or the documents accompanying it) is for the sole use of the intended recipient(s) of Fresh Connection Brand 
		             and may contain information protected by the attorney-client privilege, the attorney-work-product doctrine or other applicable privileges or confidentiality laws or 
		             regulations. If you are not an intended recipient, you may not review, use, copy, disclose or distribute this message or any of the information contained in this 
		             message to anyone. If you are not the intended recipient, please contact the sender by reply e-mail and destroy all copies of this message and any attachments. <br>
		             - Thank You.<b></div><br><br><br>
					 
					 
					 <center>©Fresh Connection Brand, LLC. All rights reserved</center>'; 
		$message .= "</body></html>";
		             EOF; 
		
		mail($to,$subject,$message,$headers);
	}


?>