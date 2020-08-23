
<?php   $this->load->view('/templates/header'); ?>
<!--== Page Title Start ==-->
<div class="page-title section-padding overlay mt-1 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="page-title-wrap">

                        <h2>Welcome <?= $this->session->userdata('FULLNAME') ?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Users</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Page Title End ==-->

    
    <!--== Service Page Content Start ==-->
    <section id="service-page-wrap" class="section-padding mt-3 mb-5">
        <div class="container">
            <div class="row">
                <!-- Single Service Start -->
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa fa-globe"></i>
                        </div>
                        <h4>Register</h4>
                        <a href="#" class="load-more">Read more <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <!-- Single Service End -->

                <!-- Single Service Start -->
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa fa-cubes"></i>
                        </div>
                        <h4>Be a Member</h4>
                        <a href="#" class="load-more">Read more <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <!-- Single Service End -->

                <!-- Single Service Start -->
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa fa-area-chart"></i>
                        </div>
                        <h4>Or Volunteer</h4>
                        <a href="#" class="load-more">Read more <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <!-- Single Service End -->

              

              
            </div>
        </div>
    </section>
    <!--== Service Page Content End ==-->
	<?php   $this->load->view('/templates/footer'); ?>

