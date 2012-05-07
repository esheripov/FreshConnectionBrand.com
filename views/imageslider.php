<!-- source code : https://github.com/esheripov/Fresh-Connection-Brand -->

<html lang="en">
<head>
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
                <img style="width:1100px; height:450px" src="<?php echo "$base"?>images/camo_red_width-1100.jpg" alt="" />
                <img style="width:1100px; height:450px" src="<?php echo "$base"?>images/black_camo_width-1100.jpg" alt="" data-transition="slideInLeft" />
                <img style="width:1100px; height:450px" src="<?php echo "$base"?>images/blue_width-1100.jpg" alt="" data-transition="slideInLeft" />
                <img style="width:1100px; height:450px" src="<?php echo "$base"?>images/green_camo_width-1100.jpg" alt="" />
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