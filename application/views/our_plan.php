<style>

h4 {
  position: relative;
  text-transform: uppercase;
  letter-spacing: 6px;
  font-size: 18vw;
  font-weight: 900;
  text-decoration: none;
  color: white;
  display: inline-block;
  background-size: 120% 100%;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  -moz-background-clip: text;
  -moz-text-fill-color: transparent;
  -ms-background-clip: text;
  -ms-text-fill-color: transparent;
  background-clip: text;
  text-fill-color: transparent;
  background-image: linear-gradient(45deg, 
                    #7794ff, 
                    #44107A,
                    #FF1361,
                    #FFF800);
  /*animation: 5.180s shake infinite alternate;*/
}

@keyframes shake {
  0% { transform: skewX(-15deg); }
  5% { transform: skewX(15deg); }
  10% { transform: skewX(-15deg); }
  15% { transform: skewX(15deg); }
  20% { transform: skewX(0deg); }
  100% { transform: skewX(0deg); }  
}


</style>


<?php $this->load->view("header")?>
<!--<div id="UpdateProgress" style="display:none;">-->
	
<!--                        <div id="overlay">-->
<!--                <div id="modalprogress">-->
<!--                    <div id="theprogress">-->
<!--                        <img id="Image1" src="img/progress.gif" alt="Processing" style="width:230px;border-width:0px;" /><br />-->
<!--                        Please wait...</div></div></div>-->
                    
<!--</div>	-->
                

						<div style="background-color:darkgrey;">
							<center><h4>Our Plans For Customers</h4></center>
						</div>
						<div style="margin-top:5%">
						    <center><h4>SILVER</h4></center>
						</div>
						    	
						    <div style="background-color:lightblue;">
						        
						 
						            <div class="row">
    						            <div class="col-md-5">
    						                 <label style="margin-top:1%; text-align:left; float:right;">
    						                 Silver  मैचिंग बाइनरी =1: 1        
                                            <br>डेली  कैपिंग =6 पेयर                        
                                            <br>1 पेयर =600 Rs/-
                                            <br>6 पेयर =3600 Rs/-डेली
                                             </label>
    						            </div>
    						            <div class="col-md-2"></div>
    						            <div class="col-md-5">
    						                 <label style="margin-top:1%; text-align:left;">
    						                  Daily  Closing - (5:00AM to 2:50PM and 3:00PM to 11:45PM)
                                             <br>24 Hours  2 Cutout
                                            <br>3 पेयर  कैपिंग +3 पेयर  कैपिंग
                                            <br>बाइनरी का पेमेन्ट 1 पेयर 600रू. 50% 14 पेयर  तक  अपग्रेडिंग के  लिए  कटिंग किया जायेगा  |
                                            <br>15 पेयर से 100 % बाइनरी 600 रू अनलिमिटेड  डेफ्ट तक मिलता रहेगा |
                                     </label>
    						            </div>
    						        </div>
						           
                                    <!--<br>-->
                                  
                                   
				          
				            </div>
				                <div class="row">
        						    <div class="col-md-4">
        						        <img  src="<?php echo base_url();?>assets/img/cs-converted.png" style="float:right;width:300px; height:400px;">
        						    </div>
        						    <div class="col-md-8">
        						         <center> <table style="background-color:antiquewhite; width:60%;height:30%;margin-top:5%;" class="table table-bordered">
                							    <tbody>
                    							 <?php $silver = $this->db->get('silver_reward')->result();
                    							 //print_r($silver);
                    							 $i=1;
                    						    foreach($silver as $sdata)
                    						    { ?>
                    							        <tr>
                    							            <td><?php echo $i."Reward";?></td>
                    							            <td><?php echo $sdata->root_no."&nbsp;Pair";?></td>
                    							            <td><?php echo $sdata->reward;?></td>
                    							        </tr>
                    							   
                    						    <?php $i++; }
                    						    ?>
                    						    </tbody>
                						  </table></center>
        						    </div>
        						</div>
						  
					
						<div style="margin-top:5%">
						    <center><h4>GOLD</h4></center>
						</div>
							
						<div style="background-color:lightblue;">
						    <div class="row">
						        <div class="col-md-5">
						            <label style="margin-top:1%;text-align:left; float:right;">
						                Gold 3750 Rs/-  मैचिंग बाइनरी =1 :1    
                                       <br> डेली  कैपिंग =6 पेयर                        
                                       <br> 1 पेयर =1800 Rs/-
                                        <br>6 पेयर =10800  Rs/-डेली
                                    </label>
						        </div>
						        <div class="col-md-2"></div>
						        <div class="col-md-5">
						            <label style="margin-top:1%;text-align:left;">
    						               Daily  Closing -(5:00AM to 2:50PM and 3:00PM to 11:45PM)
                                         <br>24 Hours  2 Cutout
                                        <br>3 पेयर  कैपिंग +3 पेयर  कैपिंग
                                        <br>बाइनरी का  पेमेन्ट 1 पेयर 1800रू.50%14 पेयर तक  अपग्रेडिंग के  लिए  कटिंग किया जायेगा  |
                                        <br>15 पेयर से 100 % बाइनरी 1800 रू  अनलिमिटेड  डेफ्ट तक मिलता रहेगा |
			                        </label>
						        </div>
						    </div>
						    
    						   
                               
                              		        
					   </div>
					        <div class="row">
    						    <div class="col-md-4">
    						         <img  src="<?php echo base_url();?>assets/img/cs-converted.png" style="float:right;width:300px; height:400px;">
    						    </div>
    						    <div class="col-md-8">
    						        <center><table style="background-color:antiquewhite; width:60%;height:30%;margin-top:5%;" class="table table-bordered">
        							    <tbody>
            							 <?php $silver = $this->db->get('gold_reward')->result();
            							 //print_r($silver);
            							 $i=1;
            						    foreach($silver as $sdata)
            						    { ?>
            							        <tr>
            							            <td><?php echo $i."Reward";?></td>
            							            <td><?php echo $sdata->pair_no."&nbsp;Pair";?></td>
            							            <td><?php echo $sdata->reward;?></td>
            							        </tr>
            							   
            						    <?php $i++; }
            						    ?>
            						    </tbody>
        							</table></center>
    						    </div>
    						</div>
						    
						<div style="margin-top:5%">
						    <center><h4>DIAMOND</h4></center>
						</div>
						
						<div style="background-color:lightblue;">
						    <div class="row">
						        <div class="col-md-5">
						             <label style="margin-top:1%;text-align:left; float:right;">
						             DIAMOND 12000 Rs/- मैचिंग बाइनरी =1 :1    
                                       <br> डेली  कैपिंग =6 पेयर                        
                                       <br> 1  पेयर =6000 Rs/-
                                        <br>6 पेयर =36000 Rs/-डेली
                                        </label>
						        </div>
						        <div class="col-md-2"></div>
						        <div class="col-md-5">
						             <label style="margin-top:1%;text-align:left;">
    						            Daily  Closing -(5:00AM to 2:50PM and 3:00PM to 11:45PM)
                                     <br>24 Hours  2 Cutout
                                    <br>3 पेयर  कैपिंग +3 पेयर  कैपिंग
                                    <br>बाइनरी का  पेमेन्ट 1 पेयर 6000रू 50% 14 पेयर  तक  अपग्रेडिंग के  लिए  कटिंग किया जायेगा |
                                    <br>15 पेयर से 100 % बाइनरी 6000 रू  अनलिमिटेड  डेफ्ट तक मिलता रहेगा |
    					       </label>
						        </div>
						    </div>
						   
    						   
                                
					   </div>
					   	<div class="row">
    						    <div class="col-md-4">
    						        <img  src="<?php echo base_url();?>assets/img/cs-converted.png" style="float:right;width:300px; height:400px;">
    						    </div>
    						    <div class="col-md-8">
    						        	<center><table style="background-color:antiquewhite; width:60%;height:30%;margin-top:5%;" class="table table-bordered">
            							    <tbody>
                							 <?php $silver = $this->db->get('diamond_reward')->result();
                							 //print_r($silver);
                							 $i=1;
                						    foreach($silver as $sdata)
                						    { ?>
                							        <tr>
                							            <td><?php echo $i."Reward";?></td>
                							            <td><?php echo $sdata->pair_no."&nbsp;Pair";?></td>
                							            <td><?php echo $sdata->reward;?></td>
                							        </tr>
                							   
                						    <?php $i++; }
                						    ?>
                						    </tbody>
        							    </table></center> 
    						    </div>
    						</div>
					
						<div style="margin-top:5%">
						    <center><h4>CROWN</h4></center>
						</div>
							
							<div style="background-color:lightblue;"><center>
						   
						        <div class="row">
    						        <div class="col-md-5">
    						             <label style="margin-top:1%;text-align:left; float:right;">
    						              DIAMOND 12000 Rs/- मैचिंग बाइनरी =1 :1    
                                           <br> डेली  कैपिंग =6 पेयर                        
                                           <br> 1  पेयर =6000 Rs/-
                                            <br>6 पेयर =36000 Rs/-डेली
                                            </label>
    						        </div>
    						        <div class="col-md-2"></div>
    						        <div class="col-md-5">
    						             <label style="margin-top:1%;text-align:left;">
    						            Daily  Closing -(5:00AM to 2:50PM and 3:00PM to 11:45PM)
                                         <br>24 Hours  2 Cutout
                                        <br>3 पेयर  कैपिंग +3 पेयर  कैपिंग
                                        <br>बाइनरी का  पेमेन्ट 1 पेयर 6000रू 50% 14 पेयर  तक  अपग्रेडिंग के  लिए  कटिंग किया जायेगा |
                                        <br>15 पेयर से 100 % बाइनरी 6000 रू  अनलिमिटेड  डेफ्ट तक मिलता रहेगा |
					        </label>
    						        </div>
    						    </div>
    						  
                               
					   </center></div>
					   <div class="row">
    						    <div class="col-md-4">
    						         <img  src="<?php echo base_url();?>assets/img/cs-converted.png" style="float:right;width:300px; height:400px;">
    						    </div>
    						    <div class="col-md-8">
    						        <center><table style="background-color:antiquewhite; width:60%;height:30%;margin-top:5%;" class="table table-bordered">
        							    <tbody>
                							 <?php $silver = $this->db->get('crown_reward')->result();
                							 //print_r($silver);
                							 $i=1;
                						    foreach($silver as $sdata)
                						    { ?>
                							        <tr>
                							            <td><?php echo $i."Reward";?></td>
                							            <td><?php echo $sdata->pair_no."&nbsp;Pair";?></td>
                							            <td><?php echo $sdata->reward;?></td>
                							        </tr>
                							   
                						    <?php $i++; }
                						    ?>
            						    </tbody>
    							    </table></center>
    						    </div>
    						</div>
						   
							
							<div style="margin-top:5%">
						        <center><h4>Auto Pul Income</h4></center>
						    </div>
						    <div style="margin-top:1%;text-align:center;">
						<center><label style="background-color:grey;color:white;">Note- 3 Sponsor is must after auto pul income</label></center></div>
						<div class="row" style="padding-left:10%;padding-right:10%;">
						    <div class="col-md-4">
						        <img  src="<?php echo base_url();?>assets/img/kois.png" style="float:right;width:300px; height:400px;">
						    </div>
						    <div class="col-md-8">
						         <center><table style="background-color:antiquewhite; width:60%;height:30%;margin-top:1%;" class="table table-bordered">
    							    <tbody>
        							 <?php $silver = $this->db->get('auto_pool')->result();
        							 //print_r($silver);
        							 $i=1;
        						    foreach($silver as $sdata)
        						    { ?>
        							        <tr>
        							            <td><?php echo $i."Reward";?></td>
        							            <td><?php echo $sdata->person_no."&nbsp;Pair";?></td>
        							            <td><?php echo $sdata->pool_amount;?></td>
        							        </tr>
        							   
        						    <?php $i++; }
        						    ?>
        						    </tbody>
							    </table></center> 
						    </div>
						</div>
						 
							
								<div style="margin-top:5%">
						            <center><h4 >ROI DAILY INCOME PLAN</h4></center>
						        </div>
						    <div class="card" style="margin-top:1%;text-align:center;">
        						<center><label style="font-size:20px;background-color:antiquewhite;color:black;">Every person coming to Autopul will continue to get the benefit of the ROI Plan daily.
        						<br> OR <br>
        				 	        ऑटोपूल  में आने वाले हर व्यक्ति को ROI Plan का लाभ प्रतिदिन मिलता रहेगा। 
        						</label></center>
        					</div>
        					
        					<div style="margin:2%;">
        					    <label>
        					        
        					        Term & Condition-
        					        <br>1. &nbsp;&nbsp; Tomorrow payout transfered to bank.
        					        <br>2. &nbsp;&nbsp; Processing fee 5% and GST charges 5%.
        					        <br>3. &nbsp;&nbsp; Without Pan Card TDS 10% will be deducted.
        					        <br>4. &nbsp;&nbsp; Cash Transaction is not allowed.
        					        <br>5. &nbsp;&nbsp; Company any time change Rules & Regulations. The all decision Company rule regulation on allowed No any direction.
        					        <br>6. &nbsp;&nbsp; Company is not responsible for any cash paid to third part.
        					    </label>
        					</div>
					</div>
				</div>
		
<!-- Data Tables Stripped & Bordered Section END -->

 
        


<!-- Action Box START -->
<div class="action-box action-box-md grey-bg center-holder-xs">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-sm-10 col-12">
				<h3 class="bold">Business Plan</h3>
				<p>We provide a great business opportunity to fulfill your dreams.</p>	
			</div>
			<div class="col-md-2 col-sm-2 col-12 right-holder center-holder-xs">
				<a href="<?php echo base_url();?>assets/img/pp.pdf"  target="_blank" class="button-md primary-button">Read More</a>
				</div>
		</div>
	</div>
</div>


<?php echo $this->load->view("footer"); ?>