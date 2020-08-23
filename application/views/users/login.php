<?php   $this->load->view('/templates/header'); ?>
    <!--== Login Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding container mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8 m-auto">
                    <div class="login-page-content">
                        <div class="login-form">
                            <h3>Welcome Back!</h3>
						<!-- Include Flash Data File -->
                          <?php $this->load->view('_FlashAlert\flash_alert.php') ?>
						  <?= form_open() ?>
                                <div class="input-item">
                                    <label for="user">Email</label>
                                  
                                    <input type="email" class="form-control  <?= (form_error('email') == "" ? '':'is-invalid') ?>" name="email" id="email" value="<?= set_value('email') ?>">
									<?= form_error('email'); ?> 
                                </div>
                                <div class="input-item">
                                    <label for="pass">Password</label>
                                    <input type="password" class="form-control <?= (form_error('password') == "" ? '':'is-invalid') ?>" name="password" id="password" value="">
									<?= form_error('password'); ?> 
                                </div>
                               
                                <div class="log-btn">
                                    <button type="submit"><i class="fa fa-sign-in"></i> Log In</button>
                                </div>
								<?= form_close() ?>
                        </div>

                           
                        <div class="create-ac">
                            <p>Don't have an account? <a href="<?= base_url('register')?>">Sign Up</a></p>
                        </div>
                        <div class="login-menu">
                            <a href="<?= base_url('login')?>"></a>
                            <span>|</span>
                            <a href="<?= base_url('register')?>">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Login Page Content End ==-->
	<?php   $this->load->view('/templates/footer'); ?>
