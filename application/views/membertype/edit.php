<?php   $this->load->view('/templates/header'); ?>
    <!--== edit polling Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding container mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8 m-auto">
                    <div class="login-page-content">
                        <div class="login-form">
                            <h3>Edit Member Type</h3>
                            
                            <form action="<?= base_url('/membertype/update/'.$membertype->id) ?>"  method="post">
                                <div class="input-item">
                                    <label for="membertype">Member Type</label>
                                  
                                    <input type="text" class="form-control" name="membertype" id="name" value="<?php echo $membertype->membertype ?>">
                                    <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $membertype->id ?>">
                                </div>
                                <div class="input-item">
                                    <label for="location">Description</label>
                                    <input type="text" class="form-control" name="description" id="description" value="<?php echo $membertype->description ?>">
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
