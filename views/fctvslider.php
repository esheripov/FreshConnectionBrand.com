<!-- source code : https://github.com/esheripov/Fresh-Connection-Brand -->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
    <title>Nivo Slider Demo</title>
    <link rel="stylesheet" href="<?php echo "$base"?>css/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo "$base"?>css/themes/pascal/pascal.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo "$base"?>css/themes/orman/orman.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo "$base"?>css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo "$base"?>css/style.css" type="text/css" media="screen" />
</head>
<body>

<br><br><br>
    <div id="wrapper">
    

        <div class="slider-wrapper theme-default">
            <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">
                <img src="<?php echo "$base"?>images/toystory.jpg" alt="" />
                <img src="<?php echo "$base"?>images/walle.jpg" alt="" data-transition="slideInLeft" />
                <img src="<?php echo "$base"?>images/nemo.jpg" alt="" title="#htmlcaption" />
            </div>
        </div>

    </div>
    <script type="text/javascript" src="<?php echo "$base"?>js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="<?php echo "$base"?>js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</body>
</html>