<?php   $this->load->view('/templates/header'); ?>
    <!--== edit polling Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding container mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8 m-auto">
                    <div class="login-page-content">
                        <div class="login-form">
                            <h3>Edit Polling Station</h3>
                            
                            <form action="<?= base_url('/pollingstation/update/'.$station->id) ?>"      method="post">
                                <div class="input-item">
                                    <label for="name">Name</label>
                                  
                                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $station->name ?>">
                                    <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $station->id ?>">
                                </div>
                                <div class="input-item">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control" name="location" id="location" value="<?php echo $station->location; ?>">
                                </div>

                                <div class="log-btn">
                                    <button type="submit"><i class="fa fa-sign-in"></i>Update</button>
                                </div>
                            </form>
                        </div>

                        <div class="login-menu">
                            <a href="/polling-stations">Go Back</a>
                            <span>|</span>
                            <a href="contact.html">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== edit polling Page Content End ==-->
	<?php   $this->load->view('/templates/footer'); ?>
