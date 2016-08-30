<?php //header('Refresh: 10; URL=http://www.your-project-path.com');
      // If you dont want to use ajax, use code this code abow ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Who's currently playing?</title>
        <link rel='stylesheet' id='google-fonts-amaticsc-css' href='//fonts.googleapis.com/css?family=Amatic+SC%3A400%2C700&#038;subset=latin-ext&#038;ver=4.5.3' type='text/css' media='all' />
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/full-page.css" rel="stylesheet">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body id="mobile-container">
        <!-- Full Page Wrapper -->
        <div class="full-page-container col-xs-12 row">
            <div class="full-page-title">
                <h1 class="popa-font">Festival 2016</h1>
                <h2 class="popa-font" style="margin-bottom: 10px;">Who's playing right now?</h2>
                <div id="hideMsg">
                    <h3 class="popa-font">Updates every <span>5</span> seconds</h3>
                </div>

                <?php
  // GLOBAL VARIABLES BELOW
  // TIMEZONE SET TO STOCKHOLM
  date_default_timezone_set('Europe/Stockholm');?>

                    <?php  //echo 'current date: ' . $currentDate; //If you want to print current date ?>

            </div>
            <!-- end of full-page-title -->

            <!-- ####STEGE 1#### -->
            <div class="stage-1 col-xs-12 col-md-6">
                <div class="title-bg-green popa-font">
                    <h2 style="text-align: center;">STAGE ONE</h2>
                </div>

                <!-- The data that is being looped will go inside .stage-1-ajax -->
                <div class="stage-1-ajax"></div>

            </div>
            <!-- end of ####STAGE 1### -->


            <!-- ####STAGE 2#### -->
            <div class="stage-2 col-xs-12 col-md-6">
                <div class="title-bg-red popa-font">
                    <h2 style="text-align: center;">STAGE TWO</h2>
                </div>

                <!-- The data that is being looped will go inside .stage-2-ajax -->
                <div class="stage-2-ajax"></div>
            </div>
            <!-- end of ####STAGE 2#### -->

        </div>
        <!-- end of .full-page-container -->

        <!-- SCRIPTS -->
        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Enable this script below if you want some words to blink -->
        <!-- <script src="js/jquery.blink.js"></script> -->

        <script src="https://apis.google.com/js/client.js?onload=searchArtist"></script>

        <script src="app.js"></script>


        <!-- Main JS -->
        <script src="js/main.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>


    </body>

    </html>