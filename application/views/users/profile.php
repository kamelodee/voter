
<?php   $this->load->view('/templates/header'); ?>
    <!-- == Login Page Content Start == -->
	<section id="lgoin-page-wrap" class="section-padding mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 m-auto">
                    <div class="login-page-content">
                        <div class="login-form">
                            <h3><?= set_value('fullname', $user->fullname) ?> Profile</h3>     
								<!-- Include Flash Data File -->
										<form class="" action="<?= base_url('update/profile')?>" method="post">
                       <!-- row start -->
	                        <div class="row">
                                   <div class="col-lg-12 col-md-12 col-sm-12">

                                      <div class="input-item">
						                <label>Full Name</label>
											<input type="text" name="fullname"  value="<?php echo $user->fullname; ?>" >
										 
                                       </div>
									   </div>
                              </div>
                         <!-- row end -->
                         <!-- row start -->
                          <div class="row">
                              <div class="col-lg-6 col-md-8 col-sm-12">
                            
                                          <div class="input-item">
								            <label>Phone Number</label>
														<input type="number" name="phone_number"  value="<?php echo $user->phone_number; ?>">  
														
                                         </div>
                                </div>

                            <div class="col-lg-6 col-md-8 col-sm-12">

                                       <div class="input-item">
							              <label>Email address</label>
															<input type="email" name="email" value="<?php echo $user->email; ?>"> 
														 
                                     </div>   
                                 </div>
                            </div>
                        <!-- //row end -->

													<!-- row start -->
												<div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                 <div class="input-item">
                                          <label for="birthdate">Birth Date</label>
                                          <input type="date" name="birthdate"  value="<?php echo $user->birthdate; ?>">  
										    
                                     </div>
                              </div>

                            <div class="col-lg-6 col-md-8 col-sm-12">
                                 <div class="input-item">
                                    <label for="membertype">Member Type</label> 
                                    <select name="membertype"   id="membertype">
                                    <?php  foreach($data['data'][0] as $value){?>
                                    <option value="<?= $value->membertype; ?>"> <?php echo $value->membertype; ?></option>
                                    <?php }  ?>
								               
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
                        
                                    <select name="polling_station" id="polling_station">
                                    <?php  foreach($data['data'][1] as $value){?>
                                    <option value="<?= $value->name; ?>"> <?php echo $value->name; ?></option>
									
                                    <?php }  ?>
							                 	
                                    </select>
                                    
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-8 col-sm-12">                       
                            <div class="input-item">
                                <label for="location">Neighbourhood</label>
                                    <input type="text" id="location" name="location" value="<?php echo $user->location; ?>">

                                </div>
                            </div>
                            </div>
                           <!-- //row end -->
						              <!-- row start -->
                            <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">                
                                <div class="input-item">
                                    <label for="pass"> Password</label>
                                    <input type="password" name="password" value="<?= set_value('password'); ?>" >
										              
                                </div>     
                            </div>
                            <div class="col-lg-6 col-md-8 col-sm-12">                       
                            <div class="input-item">
                                    <label for="pass">Password Confirm</label>
                                    <input type="password" name="passwordConfirm" value="<?= set_value('passwordConfirm'); ?>">
									                		
                                </div>
                            </div>
                            </div>
                           <!-- //row end -->  			
										
													<button type="submit" class="btn ">Update Now</button>
														</form>
														</div>  
                              <div class="create-ac">
                              <p>Already you have an account? <a href="<?= base_url('login')?>">Sign In</a></p>
                             </div>
                              <div class="login-menu">
                             <a href="<?= base_url('dashboard')?>">About</a>
                            <span>|</span>
                             <a href="<?= base_url('dashboard')?>">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Login Page Content End ==-->
	<?php   $this->load->view('/templates/footer'); ?>
