<?php $this->load->view("header")?>
<div id="UpdateProgress" style="display:none;">
	
                        <div id="overlay">
                <div id="modalprogress">
                    <div id="theprogress">
                        <img id="Image1" src="img/progress.gif" alt="Processing" style="width:230px;border-width:0px;" /><br />
                        Please wait...</div></div></div>
                    
</div>	
                
                    <div id="upd2">
				
  <!-- Data Tables Stripped & Bordered Section START -->
  
  
  <div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4>Customer Registration Form</h4>

						</div>
						<form method="post"
							action="<?php echo base_url()?>index.php/welcome/insertCustmer">
							<div class="card-body">
								<div class="alert alert-info">Note : - Please fill Sponsor Id
									for open registration form.Fill all the details and submit to
									save info.</div>

								<div class="row">

									<div class=" col-col-md-6 col-xs-6 col-lg-6 ">


										<div class="form-group row">
											<label class="col-sm-3 col-form-label required">Sponsor
												Userid<span title="Required" style="color: red;">*</span>
											</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="parent_id"
													id="parent_id"
													value="<?php //echo set_value('parent_id'); ?>"
													required="required">
												<div class="invalid-feedback">Oh no! Email is invalid.</div>
											</div>
										</div>
									</div>


									<div class=" col-col-md-6 col-xs-6 col-lg-6 ">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label"></label>
											<div class="col-sm-9">
												<div id="custoStatus"></div>
                     <?php echo validation_errors();?>
                     </div>
										</div>
									</div>
								</div>

								<div class="row" id="regForm">
									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
											<div class="col-xs-6 col-md-6 col-lg-6">
												

											</div>
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>Name<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control"
																value="<?php echo set_value('name'); ?>" name="name"
																id="name" required="required">
														</div>
									<?php echo form_error('name');?>
                                </div>
												</div>


											</div>
										</div>
									</div>

									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>Father / Husband Name<span title="Required"
															style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control"
																value="<?php echo set_value('fname'); ?>" name="fname"
																id="fname" required="required">
														</div>
					                    <?php echo form_error('fname');?> 
					                   </div>
												</div>


											</div>
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-3 ">
														<label>Address<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<textarea type="text" class="form-control" name="address"
																id="address" required="required"><?php echo set_value('address'); ?></textarea>
														</div>
                                 <?= form_error('address'); ?>

                                </div>
												</div>

											</div>
										</div>
									</div>

									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-3">
														<label> City<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control" name="city"
																id="city" value="<?php echo set_value('city'); ?>"
																required="required">
														</div>
													</div> 
					                    <?= form_error('city'); ?>
					               </div>


											</div>
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-3">
														<label>State<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control" name="state"
																id="state" value="<?php echo set_value('state'); ?>"
																required="required">
														</div>
 								<?= form_error('state'); ?>
                                </div>
												</div>

											</div>
										</div>
									</div>

									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">

													<div class="col-md-3">
														<label> Pincode<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control" name="pinno"
																id="pinno" value="<?php echo set_value('pinno'); ?>"
																maxlenght="6" ninlenght="6" required="required">
														</div>
                           			 <?= form_error('pinno'); ?> 
					               </div>


												</div>
											</div>
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-3">
														<label>Mobile No<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control phone-number"
																name="mobile" value="<?php echo set_value('mobile'); ?>"
																id="mobile" required="required">
														</div>
                                <?= form_error('mobile'); ?> 
                                </div>
												</div>
											</div>

										</div>
									</div>
								

									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-3">
														<label>Date Of Birth<span title="Required"
															style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="date" class="form-control datemask"
																name="dob" value="<?php echo set_value('dob'); ?>"
																id="dob" required="required">
														</div> 
                               			  <?= form_error('dob'); ?> 
					               </div>

												</div>
											</div>
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-3">
														<label>Gender<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group row">
															<div class="col-md-5">
																<div
																	class="custom-control custom-radio custom-control-inline">
																	<input type="radio" id="customRadioInline1" value="1"
																		name="customRadioInline1"
																		<?php if(set_value('customRadioInline1')==1){echo "checked";}?>
																		required="required" class="custom-control-input"> <label
																		class="custom-control-label" for="customRadioInline1">MALE</label>
																</div>
															</div>
															<div class="col-md-5">
																<div
																	class="custom-control custom-radio custom-control-inline">
																	<input type="radio" id="customRadioInline2" value="2"
																		name="customRadioInline1"
																		<?php if(set_value('customRadioInline1')==2){echo "checked";}?>
																		class="custom-control-input"> <label
																		class="custom-control-label" for="customRadioInline2">FEMALE
																	</label>
																</div>
															</div>
                     <?= form_error('customRadioInline1'); ?> 
                    </div>
													</div>
												</div>
											</div>
										</div>
									</div>


									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">

											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-3">
														<label>Password<span title="Required" style="color: red;">*</span></label>
													</div>

													<div class="col-md-9">
														<div class="form-group">
															<input type="password"
																value="<?php echo set_value('password'); ?>"
																required="required" class="form-control pwstrength"
																data-indicator="pwindicator" name="password"
																id="password">
														</div>
													</div>


												</div>
											</div>
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-3">
														<label>Confirm Password<span title="Required"
															style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="password" class="form-control pwstrength"
																value="<?php echo set_value('confirm_pwd'); ?>"
																required="required" data-indicator="pwindicator"
																name="confirm_pwd" id="confirm_pwd">
														</div>
                                <?= form_error('confirm_pwd'); ?> 
                                </div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-3"></div>
													<div class="col-md-9">
														<div class="form-group mb-0">
															<div class="form-check">
																<input class="form-check-input" type="checkbox"
																	id="gridCheck" required="required" name="gridCheck"> <label
																	class="form-check-label" for="gridCheck"> <a href="#">I
																		Accept Term And Condition.</a>
																</label>
															</div>
														</div>
													</div>

												</div>
											</div>
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-3"></div>
													<div class="col-md-9">
														<div class="form-group">
															<button type="submit" class="btn btn-primary"
																id="regisbtn">
																<i class="far fa-edit">&nbsp;Submit</i>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
					
					</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>

  
  
  <!--reg-->
  

</div>
<!-- Data Tables Stripped & Bordered Section END -->

</div>
    <div>    
        


<!-- Action Box START -->
<div class="action-box action-box-md grey-bg center-holder-xs">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-sm-10 col-12">
				<h3 class="bold">Business Plan</h3>
				<p>A great business opportunity to fulfil your dreams.</p>	
			</div>
			<div class="col-md-2 col-sm-2 col-12 right-holder center-holder-xs">
				<a href="<?php echo base_url();?>assets/img/pp.pdf"  target="_blank" class="button-md primary-button">Read More</a>
				</div>
		</div>
	</div>
</div>


<?php echo $this->load->view("footer"); ?>