<!-- source code : https://github.com/esheripov/Fresh-Connection-Brand -->

<style>

#shop, #blog, #enter
{
	color:white;
	display:inline; 
	text-decoration:none;
	font-size:8px;
	cursor:pointer;
}
#shop:hover, #shop:focus , #blog:hover, #blog:focus, #enter:hover, #enter:focus
{
	color: #09C;
    outline: none;
	text-decoration:none;
}

</style>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo "$base"?>css/bootstrap.css">
</head>

<body>
    <div id = "loginbar" class="topbar">
      <div style=" height:40px" class="topbar-inner">
        <div style="padding-right:5px;  min-width:550px" class="container-fluid">  
                <a id="social" target="_blank" style="position:relative; text-decoration:none; top:5px" href="http://www.facebook.com/pages/Fresh-Connection-Brand/315422955150783">
                	<img src="<?php echo "$base"?>images/Facebook-icon.png" height="31"/>
                </a>
                <a id="social" target="_blank" style="position:relative; text-decoration:none; top:5px" href="http://twitter.com/myfreshconnect">
                	<img src="<?php echo "$base"?>images/Twitter-icon.png" height="31"/>
                </a> 
                <form action="verifyLogin.php" class="pull-right" method="post">
                 <input style="letter-spacing:2px; font-size:12px; visibility:hidden" class="input-small" name = "username" type="text" required="required" autocomplete="off" placeholder="username">
             <input style="letter-spacing:2px; font-size:12px; visibility:hidden" class="input-small" name = "password" type="password" required="required" autocomplete="off" placeholder="password">
                    <button style="letter-spacing:1px; cursor:not-allowed; visibility:hidden" class="btn" type="submit" disabled="disabled">Sign in</button>
                    <button style="letter-spacing:1px; cursor:not-allowed; visibility:hidden" class="btn" onClick="return showUserRegistrationFormIndex();" disabled="disabled">Register</button>
                </form>
            </div>
        </div>
    </div>
    
    <div id="loggedinbar" style="visibility:hidden;" class="topbar">
      <div class="topbar-inner" style=" height:40px;">
        <div class="container-fluid" style="padding-right:5px; min-width:550px">   
                <form action="verifyLogin.php" class="pull-right">       
                    Logged in as 
                    <a href="#" style="text-decoration:none"> <?php echo($_SESSION['USERNAME']); ?> &nbsp;</a>
                    <button style="letter-spacing:1px;" class="btn" type="submit">Logout</button>
                    <button style="letter-spacing:1px; visibility:; padding:5px 30px 6px; background-color:#FFF; background-image:none; height:px; position:; " class="btn" type="submit"
                    onclick="return showTools()">
                        <img style="position:relative; top:0px" src="<?php echo "$base"?>images/phpThumb_generated_thumbnailpng.png" width="18" height="13" />
                    </button>
                </form>
          </div>
       </div>
    </div>
    
    <div id="navtools" style=" cursor:; overflow:visible; color:#FFF; position:fixed; left:2px; height:71px; width:410px; border-radius:15px; opacity:.8; background-color:#000; z-index:100">
        <ul style="position:relative; top:45px; padding-left:35px; list-style-type:circle; color:white">
            &nbsp;
            <a href="home" style="cursor:"><img style="position:absolute; left:-10px; top:-5px" src="<?php echo "$base"?>images/SOCKET Logo_Black_Bg tra.gif" width="34" height="28" /></a> 
            <a id="shop" href = "blog" style="">BLOG</a>
            &nbsp; | &nbsp;
            <a id="blog" href = "shop" style="">SHOP</a>
            &nbsp; | &nbsp;
            <a id="blog" href="collections">COLLECTIONS</a>
            &nbsp; | &nbsp;
            <a id="blog" href = "fctv" style="">FCTV&reg;</a>
            &nbsp; | &nbsp;
            <a id="blog" href = "about">ABOUT</a>
            &nbsp; | &nbsp;
            <a id="blog" href = "retailers">RETAILERS</a>
        </ul>
    </div>
</body>
<link rel="shortcut icon" href="<?php echo "$base"?>images/favicon.ico" type="image/x-icon"> 
</html>