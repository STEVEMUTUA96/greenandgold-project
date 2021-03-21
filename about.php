
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
            <div class="main-content">
                <!-- Section: inner-header -->
                <section class="inner-header divider layer-overlay overlay-dark-4" data-bg-img="images/bg/bg1.jpg">
                    <div class="container pt-120 pb-60">
                        <!-- Section Content -->
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="text-theme-colored2 font-36">About</h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section About -->
                <section>
                    <div class="container">
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="text-uppercasetext-theme-colored mt-0">Who <span class="text-theme-color-2">We Are</span></h2>
                                    <div class="diamond-line-left-theme-colored-2"></div>
                                    <p> We are all about people. We inspire and equip individuals to live meaningful well balanced lives in order to enjoy their  careers.
                                        <!--                                        <a class="text-theme-color-2 font-13 ml-5" href="#">read more →</a>-->
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 class="font-weight-600">Our Mission</h4>
                                            <p>To inspire individuals, organizations and teams to change their attitude through training</p>
                                            <!--                                            <a href="./" class="btn btn-theme-colored2 btn-flat btn-sm mt-10 mr-15 mb-sm-20">Read more</a>-->
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="font-weight-600">Our Vision</h4>
                                            <p>To be leaders in human Resource solutions and to impact the marketplace with holistic Human Resource Consultancy</p>
                                            <!--                                            <a href="./" class="btn btn-theme-colored2 btn-flat btn-sm mt-10">Read more</a>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box-hover-effect about-video mt-sm-30">
                                        <div class="effect-wrapper">
                                            <div class="thumb">
                                                <img class="img-fullwidth" src="images/about/7.jpg" alt="project">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Section: Team -->
                <?php
                include_once './includes/training.php';
                ?>
                <br>
                <br>

                <!-- Divider: Funfact -->


            </div>
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
        <!-- JS | Custom script for all pages -->
        <script src="js/custom.js"></script>

    </body>


</html>