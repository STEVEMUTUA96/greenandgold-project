<!DOCTYPE html>
<html dir="ltr" lang="en">

    <?php
    include_once './includes/head.php';
    ?>
    <body class="">
        <div id="wrapper" class="clearfix">
            <!-- preloader -->
            <div id="preloader">
                <div id="spinner">
                    <img alt="" src="images/preloaders/5.gif">
                </div>
                <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
            </div>

            <!-- Header -->
            <?php
            include_once './includes/header.php';
            ?>



            <!-- Start main-content -->
            <?php
            include_once './includes/bootsrap_maincontent.php';
            ?>
            <!-- end main-content -->
            <br>
            <br>
            <!-- Footer -->
            <?php
            include_once './includes/footer.php';
            ?>

            <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- end wrapper -->

        <!-- Footer Scripts -->
        <!-- JS | Chart-->
        <script src="js/chart.js"></script>
        <!-- JS | Custom script for all pages -->
        <script src="js/custom.js"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
              (Load Extensions only on Local File Systems !
               The following part can be removed on Server for On Demand Loading) -->
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

    </body>
</html>