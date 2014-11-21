<?php

$head = '
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Meteora 2014 :: Mystery Box Unveiled</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />

        <link href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:700" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="bower_components/bootstrap-sass/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/foundation.min.css"/>
        <link rel="stylesheet" href="bower_components/sidr/stylesheets/jquery.sidr.dark.css"/>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/mobile.css" media="only screen and (max-width: 500px)">

        <!-- SEO -->
        <meta name="author" content="Lezwon Castellino">
        <meta name="description" content="Don Bosco College Presents METEORA 2014. Event ensure
        2 fun filled days of nonstop activities with pulsating sound,dazzling
        moves and back 2 back contests.">
        <meta name="google-site-verification" content="ai82t3KkJx0RW66gGwiOjW45r_GDjVHTS-UsROCOYoQ" />

        <!-- Social: Facebook / Open Graph -->
        <meta property="og:url" content="http://xmeteora.net">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Meteora 2014: Mystery Box Unveiled">
        <meta property="og:image" content="../img/logo.jpg"/>
        <meta property="og:description" content="Don Bosco College Presents METEORA 2014. Event ensure
        2 fun filled days of nonstop activities with pulsating sound,dazzling
        moves and back 2 back contests.">
        <meta property="og:site_name" content="Meteora 2014">
        <meta property="website:author" content="https://www.facebook.com/lezwon">
        <meta property="website:publisher" content="https://www.facebook.com/lezwon">

        <!--Favicon-->
        <link rel="shortcut icon" href="img/favicon/favicon.ico">
        <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="img/favicon/favicon-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="img/favicon/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="img/favicon/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32">
        <meta name="msapplication-TileColor" content="#2b5797">
        <meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png">
        <meta name="msapplication-config" content="img/favicon/browserconfig.xml">';

$bodyTop = '
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <div id="sidr">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="team.php">Meteora Team</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="rules.php">Rules</a></li>
            </ul>
        </div>



        <!--navbar-->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a type="button" class="navbar-toggle" id="simple-menu" href="#sidr">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <a  href="index.php" class="navbar-brand">
                        <img src="img/logo.gif" alt=""/>
                    </a>

                </div>


                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li>
                            <div class="fb-like" data-href="https://www.facebook.com/2014meteora?ref=br_tf" data-width="60" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                        </li>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="events.php">Events</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="team.php">Team</a></li>
                        <li><a href="rules.php">Rules</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
';

$eventModal = '
        <!-- Modal -->
        <div class="modal fade" id="event-modal" tabindex="-1" role="dialog" aria-labelledby="event-modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="event-modalLabel">Event Window</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="large-5 columns">

                                <picture>
                                    <!--<source media="(min-width: 64em)" src="high-res.jpg">-->
                                    <source media="(min-width: 37.5em)" id="event-image-large" srcset="">
                                    <source id="event-image-mobile" srcset="">
                                    <img src="" alt="" id="event-image-default"/>
                                </picture>
                            </div>
                            <div class="large-7 columns">
                                <h1 id="event-name"></h1>
                                <h3 id="event-type"></h3>
                                <hr/>
                                <pre id="event-description"></pre>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

';

$scripts = '

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <!--<script>window.jQuery || document.write("<script src=\'js/vendor/jquery-1.10.2.min.js\'></script>")</script>-->
        <script src="js/plugins.js"></script>
        <script src="bower_components/bootstrap-sass/dist/js/bootstrap.min.js"></script>
        <script src="bower_components/sidr/jquery.sidr.min.js"></script>


        <!--fb like-->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, "script", "facebook-jssdk"));</script>

        <script src="js/main.js"></script>

        <script>
          (function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,"script","//www.google-analytics.com/analytics.js","ga");

          ga("create", "UA-45405314-2", "auto");
          ga("send", "pageview");

        </script>
';


$footer = '
    <div id="footer">

        <div class="row">
            <div class="small-12 columns">
                <ul class="small-block-grid-1 medium-block-grid-5 text-center">
                    <li><a target="_blank" href="">Sponsors</a></li>
                    <li><a target="_blank" href="http://tlk.io/meteora2014">Live Chat</a></li>
                    <li><a target="_blank" href="http://www.donboscogoa.org/">College Website</a></li>
                    <li><a target="_blank" href="" >Testimonials</a></li>
                    <li><a target="_blank" href="http://facebook.com/2014meteora" >Facebook</a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="small-12 columns small-centered">
                <p class="text-center author">
                    Created by <a target="_blank" href="http://facebook.com/lezwon">Lezwon Castellino</a>
                </p>
            </div>
        </div>
    </div>
';