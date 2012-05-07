<!-- source code : https://github.com/esheripov/Fresh-Connection-Brand -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Fresh Connection Brand</title>
</head>
<body>

    <form method="get|post" id="demoLoginForm" class="box login" action="adminLogin" >
        <fieldset class="boxBody">
            <img onMouseOver="opacityFilter2(this)" onMouseOut="opacityFilterOut(this)" style="position:absolute; top:17px; 
            left:14px" src="<?php echo "$base"?>images/SOCKETLogotra.gif" width="23.33" height="20" />
            <center>
                <strong>
                    <label onMouseOver="opacityFilter2(this)" onMouseOut="opacityFilterOut(this)">Fresh Connection Brand - Admin Only</label>
                </strong>
            </center>
            <br /><br />
            <label id="demoErrorMessage" style="cursor:text; letter-spacing:1px; font-weight:300;visibility:hidden; font-size:12px;
             background-color:#FFE8E8; height:25px; position:absolute; top:0px; left:-4px; border:solid 1px #F00">
            &nbsp;&#8226;Incorrect username and/or password.
            </label>
            <input type="text" tabindex="1" name = "username" placeholder="username" required>
            <input type="password" name = "password" placeholder="password" tabindex="2" required>
        </fieldset>
        <footer>
          <input type="submit" class="btnLogin" value="login" tabindex="4" />
          <label><input type="checkbox" tabindex="3" disabled="disabled" >Keep me logged in</label>
        </footer>
    </form>

</body>

<link rel="shortcut icon" href="<?php echo "$base"?>images/favicon.ico" type="image/x-icon"> 
<link rel="stylesheet" type="text/css" href="<?php echo "$base"?>css/demoLoginStructure.css">
<link rel="stylesheet" type="text/css" href="<?php echo "$base"?>css/demoLoginReset.css">
<link rel="stylesheet" type="text/css" href="<?php echo "$base"?>css/demoLogin.css">
<script src="<?php echo "$base"?>js/index.js"></script>
</html>