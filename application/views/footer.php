<footer class="footer-style-1">
	<div class="container">
		<div class="row">
			<!-- Column 1 Start -->
			<div class="col-md-4 col-sm-6 col-12">
				<h3>About Us</h3>
				<a href="#"><img src="<?php echo base_url();?>assets/img/logos/adl1.jpg" alt="img" width="150"></a>

				<div class="mt-20">
					<p>Next Money Pvt. Ltd. परिवार में आपका हार्दिक स्वागत है | अत्यंत प्रसन्ता का विषय है की आपके विश्वास एवं परम सहयोग के होते हुए कंपनी विगत साल से MLM के क्षेत्र में कार्य कर रही है |
					हमारी कंपनी में कई वर्षों के अनुभवी मेनेजमेंट सदैव आपके साथ हैं |</p>	
				</div>
				
				<ul class="footer-style-1-social-links">
					<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
					<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				
				</ul>
			</div>
			<!-- Column 1 End -->

			<!-- Column 2 Start -->
			<!--<div class="col-md-3 col-sm-6 col-12">
				<h3>Latest News</h3>
				<ul class="footer-style-1-latest-news">
					<li><span>01.01.2020</span><a href="#">Save Time & Money In Your Business</a></li>
					<li><span>01.01.2020</span><a href="#">Excellent Business ...</a></li>
					<li><span>01.01.2020</span><a href="#">Multiple Incomes</a></li>
				</ul>
			</div>-->
			<!-- Column 2 End -->

			<!-- Column 3 Start -->
			<div class="col-md-3 col-sm-6 col-12">
				<h3>Contact Info</h3>
				<ul class="footer-style-1-contact-info">
				    <li><i class="fa fa-phone"></i> <span>+91 8115857321</span></li>
				    <li><i class="fa fa-phone"></i> <span></span></li>
					<li><i class="fa fa-envelope-open"></i> <span>info@gmail.com</span></li>
					<li><i class="fa fa-map-marker-alt"></i> <span>Address:Munshi puliya basudev inter collage lucknow -226028</span>
</li>
					
				</ul>
			</div>
			<!-- Column 3 End -->
			<!-- Column 4 Start -->
			<div class="col-md-2 col-sm-6 col-12">
				<h3>Quick Links</h3>
				<ul class="footer-style-1-links">
					<li><a href="<?php echo base_url();?>index.php/welcome/read">About Us</a></li>
					<li><a href="<?php echo base_url();?>index.php/welcome/registration">Registration</a></li>
					<li><a href="<?php echo base_url();?>adlsoft/" target="_blank">Login</a></li>
					<li><a href="<?php echo base_url();?>index.php/welcome">Gallery</a></li>		
					<li><a href="<?php echo base_url();?>index.php/welcome/contact">Contact Us</a></li>
				</ul>
			</div>		
			<!-- Column 4 End -->
			<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14586.567221035193!2d83.92272359771857!3d26.73313312657278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcb9f09a578e61ec4!2sAshirvad%20life%20care%20hospital!5e0!3m2!1sen!2sin!4v1572589004054!5m2!1sen!2sin" width="300px" height="200px" frameborder="0" style="border:0;padding:80px;" allowfullscreen=""></iframe>-->
			 <strong>  <h3 class="">Total Visitors:
                                            <?php
									/* counter */
									//opens countlog.txt to read the number of hits
									$datei = fopen("./counter.txt","r");
									$count = fgets($datei,50000);
									fclose($datei);
									$count=$count + 1 ;
									?><font size="3" color="white"><?php
									echo "$count" ;
									?></font>
									<?php
									// opens countlog.txt to change new hit number
									$datei = fopen("./counter.txt","w");
									fwrite($datei, $count);
									fclose($datei);
									?> </h3></strong>
									
		</div>
	</div>

	<div class="footer-style-1-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-12">
					<h5>Next Money © 2019. All Copy Rights Reserved.</h5>
				</div>

				<div class="col-md-6 col-sm-6 col-12">
					<ul class="footer-style-1-bar-links">
						<li><a href="#" target="_blank">Developed By : www.nextmoney.in</a></li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- Scroll to top button Start -->
<a href="#" class="scroll-to-top"><i class="fas fa-chevron-up"></i></a>	
<!-- Scroll to top button End -->

<!-- Jquery -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

<!-- Plugins JS-->
<script src="<?php echo base_url();?>assets/js/plugins.js"></script>	

<!-- Navbar JS -->
<script src="<?php echo base_url();?>assets/js/navigation.js"></script>
<script src="<?php echo base_url();?>assets/js/navigation.fixed.js"></script>

<!-- Google Map -->
<script src="<?php echo base_url();?>assets/js/map.js"></script>

<!-- Main JS -->
<script src="<?php echo base_url();?>assets/js/main.js"></script>

    </div>

<!-- Scroll to top button Start -->
<a href="#" class="scroll-to-top"><i class="fas fa-chevron-up"></i></a>	
<!-- Scroll to top button End -->

<!-- Jquery -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

<!-- Plugins JS-->
<script src="<?php echo base_url();?>assets/js/plugins.js"></script>	

<!-- Navbar JS -->
<script src="<?php echo base_url();?>assets/js/navigation.js"></script>
<script src="<?php echo base_url();?>assets/js/navigation.fixed.js"></script>

<!-- Google Map -->
<script src="<?php echo base_url();?>assets/js/map.js"></script>

<!-- Main JS -->
<script src="<?php echo base_url();?>assets/js/main.js"></script>

<!--scriptin registration--->
<script>

 //alert("rahul");
 //$('#regForm').hide();
  $('#parent_id').keyup(function(){
    var parent_id= $('#parent_id').val();
    $.post("<?php echo site_url("welcome/checkID") ?>",{parent_id : parent_id}, function(data){
    	var d = jQuery.parseJSON(data);
		$("#custoStatus").html(d.msg);
 if(d.checkv==true){
	 $('#regForm').show();
 }else{
	 $('#regForm').show();
 }
   
  
  
	});
  });


</script>

    </form>
</body>

</html>
