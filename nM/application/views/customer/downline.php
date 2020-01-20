<div class="main-content">
     <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                        <div class="row">
                         <div class="col-xs-12 col-md-12 col-lg-12">
                            <h4><?php echo $smallTitle;?></h4>
                            </div>
                            
                            </div>

                        </div>
                        <div class="card-body">

                        <div class="col-xs-12 col-md-12 col-lg-12">
                         <div class="row">
                              <?php if($tabv==6){ 
                              ?>  <div class="col-xs-12 col-md-12 col-lg-12"><?php }else{?>
                         <div class="col-xs-6 col-md-6 col-lg-6">
                             <?php }?>
                            <div class="card-content table-full-width">
                                <h4 class="leftdownline"><?php if($tabv==6){echo "Downline List tree";}else {echo "Downline List (Direct) Left";}?></h4>
                                <table class="table table-bordered table-hover table-responsive text-nowrap">
                                <thead>
                                    <?php if($tabv==6){?>
                                        <tr >
                                      
                                        <th>User name[id]</th>
                                        <th>Sponsor[id]</th>
                                        <th>Position</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                  <?php   }else{
                                    ?>
                                    <tr class="table-primary">
                                        <th>#</th>
                                        <th>User ID</th>
                                        <th>Name</th>
                                    
                                       
                                        <!-- <th>Position</th> -->
                                        <th>Status</th>
                                        <th>Activate Date</th>
                                    </tr>
                                    <?php }?>
                                </thead>
                                    <tbody>
                                    <?php
                                        
                                       $i=1;
                                       if($tabv==1){ 
                                       $this->db->where('joiner_id',$this->session->userdata("customer_id"));
                                        	$dat= $this->db->get('customer_info');
                                        	
                                        	
                                        ?>
                                        	
                                                                  
                                       <?php $r=0; foreach ($dat->result() as $dtt): 
                                        
                                            $this->db->where('id',$dtt->id);
                                           $dat= $this->db->get('customer_info')->row();
                                        ?><tr>
                                        	<td><?php echo $r+2;?></td>
                                        	  <td><?php echo  $dat->username; ?></td>
                                        	   <td><?php echo  $dat->customer_name; ?></td>
                                        	   
                                        	      <!-- <td><?php //echo  $dat->c_id; ?></td> -->
                                        	      <td><?php if($dat->status==1) { echo "<label style='color:green'>ACTIVE</label>"; } else { echo "<label style='color:red'>NOT ACTIVE</label>"; }  ; ?></td>
                                        	       <td><?php echo  $dat->active_date; ?></td>
                                        	        <!-- <td></td> -->
                                        	        </tr>
                                        	  <?php $r++;endforeach;}
                                        else{
                                           if($tabv==6){
                                               $count="L";
                                           $count1="R";
                                            $this->db->where("c_id",$cid);
                                           $getright =  $this->db->get("silver_tree");
                                            $this->db->where("id", $cid);
                                                 $data1 = $this->db->get("customer_info");
                                                 
                                             $this->db->where("id", $getright->row()->left);
                                                 $data2 = $this->db->get("customer_info");    
                                                 //code for right
                                                 
                                                 
                                            if($getright->num_rows()>0){
                                               
                                                if($data1->num_rows()>0){
                                                	$data1=$data1->row();
                                                	
                                                	
                                                	if($data2->num_rows()>0){
                                                		$data2=$data2->row();
                                                		if($data2->status==1){ $status= "Active";}else{$status="Inactive";}
                                                	
                                                 
                                                	echo 	"<tr>
						
								 <td>".$data2->customer_name. "[".$data2->username."]"."</td>
								  <td>".$data1->customer_name."[".$data1->username."]</td>
								   <td>".$count."</td>
								 <td>". $status. "</td>
								  <td>". $data2->active_date."</td>
								
							</tr>
							";
                                                	$this->tree->getRightData($getright->row()->left,$count);
                                                	 
                                            }}
                                            }else{
                                                		echo "Record Not Found";
                                                	}
                                            }else{
                                        
                                        	}}?>         
                                        </tbody>
                                </table>
                            </div>
                        </div>
                        <?php  if($tabv==6){
                        ?>
                        	</div>
                        	</div>
                       <?php  } ?>
                          
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
</div>