<?php include 'reference.php'; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <link href="http://cdnjs.cloudflare.com/ajax/libs/nanogallery/5.1.1/css/nanogallery.min.css" rel="stylesheet" type="text/css">

    <?php echo $head; ?>
</head>
<body class="bokeh-bg">
    <?php echo $bodyTop; ?>

    <div class="wrapper other-wrapper">

        <div class="row other-row">
            <div class="small-12 columns">
                <h1 class="title text-center light">Gallery</h1>
                <p class="text-center">Following is a photo collection of Meteora's most memorable moments.</p>
                <hr/>
            </div>
        </div>

        <div class="row">
            <div class="small-12 columns">
                <div id="nanoGallery"></div>
            </div>
        </div>

        <?php echo $footer; ?>

    </div>

    <?php echo $eventModal; ?>


    <!-- nanoGALLERY plugin files -->
    <!--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/nanogallery/5.2.0/css/themes/light/nanogallery_light.min.css"/>-->
    <!--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/nanogallery/5.2.0/css/themes/clean/nanogallery_clean.min.css"/>-->

    <?php echo $scripts; ?>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/nanogallery/5.1.1/jquery.nanogallery.min.js"></script>
</body>

</html>
