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
                                    <h2 class="text-theme-colored2 font-36">Services</h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section: Services -->
                <section class="bg-silver-light">
                    <div class="container pb-40">
                        <div class="section-content">
                            <div class="row">
                                <div class="section-title text-center mb-40">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <h2 class="text-uppercase title">our<span class="text-theme-colored2"> Services</span></h2>
                                            <div class="diamond-line-centered-theme-colored2"></div>
                                            <p>Our Mission is to provide the most competitive and human capital resource consultancy service in Kenya and the region.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="icon-box left media border-1px border-hover-theme-colored mb-30 p-30 pb-20" style="height: 300px"> <a class="media-left pull-left flip" href="#"><i class="fa fa-area-chart text-theme-colored2"></i></a>
                                        <div class="media-body">
                                            <h4 class="icon-box-title font-weight-600">Human Resource Training</h4>
                                            <p>Green and Gold develops custom training for all your individual, group and organization growth needs. We also do teambuilding to improve team synergy as well other team
                                                issues to ensure win-win situations for individuals and the organisation.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4" >
                                    <div class="icon-box left media border-1px border-hover-theme-colored mb-30 p-30 pb-20"  style="height: 300px"> <a class="media-left pull-left flip" href="#"><i class="fa fa-pie-chart text-theme-colored2"></i></a>
                                        <div class="media-body">
                                            <h4 class="icon-box-title font-weight-600">Performance Management</h4>
                                            <p>Green and Gold monitors performance in line with set expectations for further organization development through periodical individual
                                                and group performances ratings to recognize and reward sterling performance.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="icon-box left media border-1px border-hover-theme-colored mb-30 p-30 pb-20"  style="height: 300px"> <a class="media-left pull-left flip" href="#"><i class="fa fa-cubes text-theme-colored2"></i></a>
                                        <div class="media-body">
                                            <h4 class="icon-box-title font-weight-600">Interview Coaching</h4>
                                            <p>Our interview coaching dwells on dressing the part, voice pitch, eye contact and overall image to enable candidates exude the much needed
                                                confidence during interviews.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="icon-box left media border-1px border-hover-theme-colored mb-30 p-30 pb-20"  style="height: 300px"> <a class="media-left pull-left flip" href="#"><i class="fa fa-globe text-theme-colored2"></i></a>
                                        <div class="media-body">
                                            <h4 class="icon-box-title font-weight-600">Recruitment & Selection</h4>
                                            <p>Green and Gold has the expertise to select the most suitable candidate sifted from thousands of applications. We easily spot an individual’s
                                                gifting after careful screening based on abilities, interpersonal skills, education, and work history in comparison to
                                                the current position work demands.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="icon-box left media border-1px border-hover-theme-colored mb-30 p-30 pb-20" style="height: 300px"> <a class="media-left pull-left flip" href="#"><i class="fa fa-bug text-theme-colored2"></i></a>
                                        <div class="media-body">
                                            <h4 class="icon-box-title font-weight-600">Orientation and Onboarding</h4>
                                            <p>Teams achieve distinction when individual ambitions are aligned to the overall team objectives. Our role is to ensure that the staff are
                                                and commited to the organisation‘s vision and mission embodied in its culture.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="icon-box left media border-1px border-hover-theme-colored mb-30 p-30 pb-20" style="height: 300px"> <a class="media-left pull-left flip" href="#">
                                            <i class="fa fa-bar-chart-o text-theme-colored2"></i></a>
                                        <div class="media-body">
                                            <h4 class="media-heading heading font-weight-600">Resume Writing</h4>
                                            <p>Green and Gold provides guidance on resume writing for pre-college and post college candidates as well as individuals in and out of the job market.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <!-- Divider: Funfact -->


                <!-- Section: Gallery -->
                <?php
                include_once './includes/projects.php';
                ?>

                <!-- Section: Team -->


            </div>
            <!-- end main-content -->

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