<?php   $this->load->view('/templates/header'); ?>
    <!-- == Login Page Content Start == -->
	<section id="lgoin-page-wrap" class="section-padding mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 m-auto">
                    <div class="login-page-content">
                        <div class="login-form">
                            <h3>Register</h3>     
								<!-- Include Flash Data File -->
							<?php $this->load->view('_FlashAlert\flash_alert.php') ?>
					<?= form_open() ?>
                       <!-- row start -->
	                        <div class="row">
                                   <div class="col-lg-12 col-md-12 col-sm-12">

                                      <div class="input-item">
						                <label>Full Name</label>
											<input type="text" name="fullname" value="<?= set_value('fullname'); ?>" class="form-control <?= (form_error('fullname') == "" ? '':'is-invalid') ?>" placeholder="Enter Full Name">
											<?= form_error('fullname'); ?>  
                                       </div>
									 </div>
                              </div>
                         <!-- row end -->
                         <!-- row start -->
                          <div class="row">
                              <div class="col-lg-6 col-md-8 col-sm-12">
                            
                                          <div class="input-item">
								            <label>Phone Number</label>
											<input type="number" name="phone_number" value="<?= set_value('phone_numer'); ?>" class="form-control <?= (form_error('phone_number') == "" ? '':'is-invalid') ?>" placeholder="Enter Phone Number">  
											<?= form_error('phone_number'); ?> 
                                         </div>
                                </div>

                            <div class="col-lg-6 col-md-8 col-sm-12">

                                       <div class="input-item">
							              <label>Email address</label>
											<input type="email" name="email" value="<?= set_value('email'); ?>" class="form-control <?= (form_error('email') == "" ? '':'is-invalid') ?>" placeholder="Enter Email"> 
											<?= form_error('email'); ?>  
                                     </div>   
                                 </div>
                            </div>
                        <!-- //row end -->

					     <!-- row start -->
						<div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                 <div class="input-item">
                                          <label for="birthdate">Birth Date</label>
                                          <input type="date" name="birthdate" value="<?= set_value('birthdate'); ?>" class="form-control <?= (form_error('birthdate') == "" ? '':'is-invalid') ?>" placeholder="Enter Userame">  
											<?= form_error('birthdate'); ?>  
                                     </div>
                              </div>

                            <div class="col-lg-6 col-md-8 col-sm-12">
                                 <div class="input-item">
                                    <label for="membertype">Member Type</label> 
                                    <select name="membertype"  class="form-control <?= (form_error('membertype') == "" ? '':'is-invalid') ?>" id="membertype">
                                    <?php  foreach($data[0] as $value){?>
                                    <option value="<?= $value->membertype; ?>"> <?php echo $value->membertype; ?></option>
                                    <?php }  ?>
									<?= form_error('membertype'); ?>
                                    </select>       
                                </div>
                            </div>
                            </div>
                            <!-- //row end -->
										
							 <!-- row start -->
							<div class="row">
                              <div class="col-lg-6 col-md-8 col-sm-12">                
                           
                                 <div class="input-item">
                                    <label for="polling_station">Polling Station</label>
                        
                                    <select name="polling_station" class="form-control <?= (form_error('polling_station') == "" ? '':'is-invalid') ?>" id="polling_station">
                                    <?php  foreach($data[1] as $value){?>
                                    <option value="<?= $value->name; ?>"> <?php echo $value->name; ?></option>
									
                                    <?php }  ?>
									<?= form_error('polling_station'); ?>
                                    </select>
                                    
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-8 col-sm-12">                       
                            <div class="input-item">
                                <label for="location">Neighbourhood</label>
                                    <input type="text" id="location" name="location"  class="form-control <?= (form_error('location') == "" ? '':'is-invalid') ?>"  placeholder="Neighbourhood" value="<?php echo set_value('location'); ?>">
									<?= form_error('location'); ?>
                                </div>
                            </div>
                            </div>
                           <!-- //row end -->
						    <!-- row start -->
                            <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">                
                                <div class="input-item">
                                    <label for="pass"> Password</label>
                                    <input type="password" name="password" value="<?= set_value('password'); ?>" class="form-control <?= (form_error('password') == "" ? '':'is-invalid') ?>" placeholder="Password">
											<?= form_error('password'); ?>
                                </div>     
                            </div>
                            <div class="col-lg-6 col-md-8 col-sm-12">                       
                            <div class="input-item">
                                    <label for="pass">Password Confirm</label>
                                    <input type="password" name="passwordConfirm" value="<?= set_value('passwordConfirm'); ?>" class="form-control <?= (form_error('passwordConfirm') == "" ? '':'is-invalid') ?>" placeholder="Password Confirmation">
											<?= form_error('passwordConfirm'); ?> 
                                </div>
                            </div>
                            </div>
                           <!-- //row end -->  			
										
								<button type="submit" class="btn ">Register</button>
						<?= form_close() ?>
									</div>  
                              <div class="create-ac">
                              <p>Already you have an account? <a href="<?= base_url('login')?>">Sign In</a></p>
                             </div>
                              <div class="login-menu">
                             <a href="<?= base_url('dashboard')?>">About</a>
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
