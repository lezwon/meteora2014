<?php
    include 'reference.php';
    include 'connection.php';

    ####################    RETREIVE ONSTAGE EVENTS    ####################
    $sql = "select id, name, image_small from events WHERE type = 1"; // 1 for onstage
    $onstage = retrieveData($sql);

    ####################    RETREIVE ONSTAGE EVENTS    ####################
    $sql = "select id, name, image_small from events WHERE type = 2"; // 2 for offstage
    $offstage = retrieveData($sql);

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <?php echo $head; ?>
</head>
<body class="bokeh-bg">

    <?php echo $bodyTop; ?>

    <div class="wrapper other-wrapper">

        <div class="row">
            <div class="small-12 columns">
                <div class="events-container">
                    <div class="row event-header-row">
                        <div class="small-12 columns small-centered">
                            <h1 class="title text-center">Onstage Events</h1>
                            <hr/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="small-12 columns">
                            <ul class="large-block-grid-5 medium-block-grid-3 small-block-grid-1 event-grid">

                                <?php foreach($onstage as $arrray=>$row){ ?>
                                    <li>
                                        <a href="" data-id="<?php echo $row['id'] ?>">
                                            <img src="<?php echo $row['image_small'] ?>" alt=""/>
                                            <div class="event-name-container">
                                                <p><?php echo $row['name'] ?></p>
                                            </div>
                                        </a>
                                    </li>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="events-container">
                    <div class="row event-header-row">
                        <div class="small-12 columns small-centered">
                            <h1 class="title text-center">Offstage Events</h1>
                            <hr/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="small-12 columns">
                            <ul class="large-block-grid-5 medium-block-grid-3 small-block-grid-1 event-grid">
                                <?php foreach($offstage as $arrray=>$row){ ?>
                                    <li>
                                        <a href="" data-id="<?php echo $row['id'] ?>">
                                            <img src="<?php echo $row['image_small'] ?>" alt=""/>
                                            <div class="event-name-container">
                                                <p><?php echo $row['name'] ?></p>
                                            </div>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php echo $footer; ?>


    </div>


    <?php echo $eventModal; ?>

    <?php echo $scripts; ?>
</body>
</html>
