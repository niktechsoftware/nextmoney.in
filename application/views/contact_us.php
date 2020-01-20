
<?php $this->load->view("header")?>
<div class="section-block">
	<div class="container">	
		<div class="row">
			<div class="col-md-4 col-sm-12 col-12">
				<div class="contact-box-data">
					<div class="section-heading left-holder">
						<h5 class="bold">Contact Us</h5>
						<div class="section-heading-line"></div>
					</div>
					<div class="contact-box-place clearfix">
						<div class="contact-box-icon">
							<i class="ti-map-alt"></i>
						</div>
						<div class="contact-box-text">
							<h5>Office</h5>
							<p>Ward No.4 Ambedkar Nagar Kasia Kushinagar - 274402, (U.P.)<br />
							Contact No. : +91 7860288090, +91 9506804800
							</p>
						</div>
					</div>
				<!--	<div class="contact-box-place clearfix">
						<div class="contact-box-icon">
							<i class="ti-map-alt"></i>
						</div>
					<div class="contact-box-text">
							<h5>Franchisee Office</h5>
							<p>Shop No. 51, Thakur Market Kajrauty Sadabad, Hathras - 281306, (U.P.)<br />
                                Contact No. : 9759330822<br />
                                Code No. DYD00007 </p>
						</div>
					</div>
					-->
					<div class="contact-box-place clearfix">
						<div class="contact-box-icon">
							<i class="ti-mobile"></i>
						</div>
						<div class="contact-box-text">
							<h5>Phone</h5>
							<p>1800-xxx-xxxx</p>
						</div>
					</div>

					<div class="contact-box-place clearfix">
						<div class="contact-box-icon">
							<i class="ti-email"></i>
						</div>
						<div class="contact-box-text">
							<h5>Email</h5>
							<p>info@adl.in.net</p>
						</div>
					</div>

					<div class="contact-box-place clearfix">
						<div class="contact-box-icon">
							<i class="ti-alarm-clock"></i>
						</div>
						<div class="contact-box-text">
							<h5>Open Hours</h5>
							<p>Mon — Sat: 10:00 am — 07:00 pm </p>
						</div>
					</div>
				</div>
			</div>
		
			<div class="col-md-8 col-sm-12 col-12">
			    <div class="row">
			    	<div class="contact-box-4">
					
				</div>
				</div>
				<div class="row">
				<div class="contact-box-4">
					<div class="section-heading left-holder mt-15">
						<h5 class="bold">Send us a message</h5>
						<div class="section-heading-line"></div>
					</div>
					<form action="<?php echo base_url();?>index.php/welcome/sendemail" method="post">
						<div class="row">
							<div class="col-md-12 form-group">
								<textarea class="form-control" name="message" placeholder="Message"></textarea>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<input class="form-control" type="text" name="name" placeholder="Name">
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<input class="form-control" type="email" name="email" placeholder="E-mail">
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<input class="form-control" type="number" name="mobile" placeholder="Phone">
							</div>
							<div class="col-md-12 mt-10 mb-30">
								<button type="submit" class="primary-button button-sm semi-rounded">Send Message</button>
							</div>
						</div>
					</form>
				</div>
				</div>
			</div>
		</div>	
	</div>
</div>
<!--<center>-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14586.567221035193!2d83.92272359771857!3d26.73313312657278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcb9f09a578e61ec4!2sAshirvad%20life%20care%20hospital!5e0!3m2!1sen!2sin!4v1572589004054!5m2!1sen!2sin" width="90%" height="40%" frameborder="0" style="border:0;padding:80px;" allowfullscreen=""></iframe>
    <!--</center>-->
<!-- Contact Section END -->
<!-- Map START -->
<!-- Map START -->
    </div>
    <div>
<!-- Action Box START -->
<div class="action-box action-box-md grey-bg center-holder-xs">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-sm-10 col-12">
				<h3 class="bold">Business Plan</h3>
				<p>We provide a business opportunity to fulfil your dreams.</p>	
			</div>
			<div class="col-md-2 col-sm-2 col-12 right-holder center-holder-xs">
			    	<a href="<?php echo base_url();?>assets/img/pp.pdf" class="button-md primary-button">Download</a>
			<!--	<a href="<?php echo base_url();?>assets/img/adlplan.pdf"  target="_blank" class="button-md primary-button">Read More</a>-->
			</div>
		</div>
	</div>
</div>

<?php echo $this->load->view("footer"); ?>