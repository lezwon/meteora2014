<?php
    include 'reference.php';
    include 'connection.php'
?>



<?php
    $sql = "select * from team";
    $team = retrieveData($sql);

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
        <div class="row other-row">
            <div class="small-12 columns">
                <h1 class="title text-center light">Meteora Team</h1>
                <p class="text-center">Meteora 2014: Mystery Box Unveiled is being organized by a wonderful group of our
                    most talented people.</p>
                <hr/>
            </div>
        </div>

        <div class="row">
            <div class="small-12 columns">
                <div class="image-container">
                    <img src="img/SGU.jpg" alt=""/>
                    <div class="team-text text-center">
                        <h1 >The Meteora 2014 Team</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut culpa debitis ex iste iusto
                            magni nesciunt nihil non quia quis, quo reiciendis repudiandae voluptatem, voluptates.
                            Impedit quos ratione ullam?</p>

                    </div>
                </div>
            </div>
        </div>

        <div class="row team-member-row">
            <div class="small-12 columns">
                <h1 class="text-center title">Team Members</h1>
                <hr/>
                <ul class="small-block-grid-1 large-block-grid-4  medium-block-grid-3 team-grid">
                    <?php foreach ($team as $array=>$row){ ?>
                        <li>
                            <div class="infobox">

                                <div class="row">
                                    <div class="small-4 columns">
                                        <div class="img-ctr">
                                            <img src="<?php echo $row["image"]; ?>" alt=""/>
                                        </div>
                                    </div>
                                    <div class="small-8 columns">
                                        <div class="text-ctr">
                                            <h4><?php echo $row["name"]; ?></h4>
                                            <small><?php echo $row["post"]; ?></small>
                                            <p>Tel: <a href="tel:+91<?php echo $row["phone"]; ?>"><?php echo $row["phone"]; ?></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                   <?php } ?>
                </ul>
            </div>
        </div>

        <?php echo $footer; ?>

    </div>



    <?php echo $eventModal; ?>

    <?php echo $scripts; ?>
</body>


</html>
