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
                                    <h2 class="text-theme-colored2 font-36">CollegeGrad</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section: service-->
                <section>

                    <div class="container" >
                        <div class="row">
                            <div class="col-md-8 col-md-push-2" style="border: 1px solid rgb(72,207,173, 0.3);">
                                <div class="widget">
                                    <h4 class="widget-title line-bottom">Service <span class="text-theme-colored2">List</span></h4>
                                    <div class="single-service">
                                        <img src="images/services/lg2.html" alt="">
                                        <h3 class="text-theme-colored line-bottom text-theme-colored">Recruitment & Selection </h3>
                                        <p>Green and gold has the expertise to select the most suitable candidate sifted from thousands of applications. We easily spot an individual’s gifting after careful screening based on abilities, interpersonal skill,
                                            education, and work history in comparison to the current position work demands. </p>

                                    </div>
                                    <div class="single-service">
                                        <img src="images/services/lg2.html" alt="">
                                        <h3 class="text-theme-colored line-bottom text-theme-colored">Individual and Group Coaching</h3>
                                        <p>You work with a coach to determine where you are now in your life or work life, versus where you want to be. We then brainstorm to figure out how to get you there most effectively</p>

                                    </div>
                                    <div class="single-service">
                                        <img src="images/services/lg2.html" alt="">
                                        <h3 class="text-theme-colored line-bottom text-theme-colored">Resume Writing </h3>
                                        <p>Green and Gold provides guidance on resume writing for pre-college candidates as well as individuals in and out of the job market. In extreme circumstances a complete overhaul
                                            of the existing curriculum vitae is undertaken and hence exponentially increasing the individual’s chances of qualifying for further opportunities and job openings. </p>

                                    </div>
                                    <div class="single-service">
                                        <img src="images/services/lg2.html" alt="">
                                        <h3 class="text-theme-colored line-bottom text-theme-colored">Interview Coaching </h3>
                                        <p>Our interview coaching dwells on the dressing part, voice pitch, eye contact and overall image to enable candidates exude the much-needed confidence during interviews. </p>

                                    </div>
                                    <div class="single-service">
                                        <img src="images/services/lg2.html" alt="">
                                        <h3 class="text-theme-colored line-bottom text-theme-colored">Focus Markets </h3>
                                        <p>Green and Gold brings forth a wealth of fresh ideas and processes for myriad industries and sectors of the economy among which include non- governmental organizations, corporate organizations,
                                            government departments, small and medium sized enterprises and students.  </p>

                                    </div>

                                </div>
                            </div>
                            <!--                            <div class="col-sm-12 col-md-4">
                                                            <div class="sidebar sidebar-left mt-sm-30 ml-40">
                                                                <div class="widget">
                                                                    <h4 class="widget-title line-bottom">Service <span class="text-theme-colored2">List</span></h4>
                                                                    <div class="services-list">
                                                                        <ul class="list list-border">
                                                                            <li><a href="page-service-financial-analysis.html">Curriculum Vitae</a></li>
                                                                            <li><a href="page-service-investment-planning.html">Investment Planning</a></li>
                                                                            <li><a href="page-service-saving-investments.html">Hiring & Recruiting</a></li>
                                                                            <li><a href="page-service-investment-banking.html">Interviewing Skills</a></li>
                                                                            <li class="active"><a href="collegeGrad.php.html">Employee Engagement</a></li>
                                                                            <li><a href="page-service-online-consulting.html">Legal Matters.</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>-->
                        </div>
                    </div>
                    <!--                    form-section-->
                    <div class = "container">
                        <div class = "row">
                            <div class = "col-md-6 col-md-push-3">
                                <div class = "border-1px p-30 mb-0" style="border: 1px solid rgb(72,207,173, 0.3) !important;">
                                    <h3 class = "text-theme-colored mt-0 pt-5">Apply Now</h3>
                                    <hr>
                                    <p>Graduate Recruitment Training Online Form</p>
                                    <form id = "job_apply_form" name = "job_apply_form" action = "../../../../../external.html?link=http://html.kodesolution.live/j/consulting-pro/v3.0/demo/includes/job.php" method = "post" enctype = "multipart/form-data">
                                        <div class = "row">
                                            <div class = "col-sm-6">
                                                <div class = "form-group">
                                                    <label>Name <small>*</small></label>
                                                    <input name = "form_name" type = "text" placeholder = "Enter Name" required = "" class = "form-control">
                                                </div>
                                            </div>
                                            <div class = "col-sm-6">
                                                <div class = "form-group">
                                                    <label>Email <small>*</small></label>
                                                    <input name = "form_email" class = "form-control required email" type = "email" placeholder = "Enter Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class = "row">
                                            <div class = "col-sm-6">
                                                <div class = "form-group">
                                                    <label>Gender <small>*</small></label>
                                                    <select name = "form_sex" class = "form-control required">
                                                        <option value = "Male">Male</option>
                                                        <option value = "Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class = "col-sm-6">
                                                <div class = "form-group">
                                                    <label>C/V Upload</label>
                                                    <input name = "form_attachment" class = "file" type = "file" multiple data-show-upload = "false" data-show-caption = "true">
                                                    <small>Maximum upload file size: 12 MB</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class = "form-group submit" style="margin-top: 40px !important">
                                            <input name = "form_botcheck" class = "form-control" type = "hidden" value = "" />
                                            <button type = "submit" class = "btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text = "Please wait...">Apply Now</button>
                                        </div>
                                    </form>
                                    <!--Job Form Validation-->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

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