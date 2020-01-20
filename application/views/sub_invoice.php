<?php $this->load->view("header")?>

<div class="section-block">
	<div class="container">	
		<div class="row">
			<div class="row">
           <div class="col-md-12 col-sm-12 col-12">
            <?php $id=$this->uri->segment(3);
    	//print_r($id);exit();
    	$this->db->where('id',$id);
    	$row= $this->db->get('customer_info')->row();
    	//print_r($row);?>
        
              <h3 style=" color: rgb(242, 0, 137);">Subscriber Invoice</h3>
                <?php if($this->uri->segment(3)){
                echo "Success";
                }?>
                <div class="theme-card" style="margin-top:40px; width: 100%; align:center;">
                		<table class="table table-bordered table-hover" style="width:1000px;">
                			<tr class="text-uppercase">
                				<th>Name</th>
                				<td><label><?php echo $row->customer_name;?></label></td>
                					<th>Father Name</th>
                				<td><label><?php echo $row->fname;?></label></td>
                			</tr>
                		
                			
                			<tr class="text-uppercase">
                				<th>Mobile Number</th>
                				<td><label><?php echo $row->mobilenumber;?></label></td>
                					<th>Address </th>
                				<td><label><?php echo $row->current_address;?></label></td>
                		
                			</tr>
                		
                			<tr class="text-uppercase">
                				<th>Username</th>
                				<td><label><?php echo $row->username;?></label></td>
                					<th class="text-uppercase">Password</th>
                				<td><label><?php echo $row->password;?></label></td>
                		
                			</tr>
                		
                				<tr>
                				<th class="text-uppercase">Registration No</th>
                				<td><label><?php echo $row->id;?></label></td>
                				 <th class="text-uppercase">Registration Date</th>
                			    <td><lable><?php echo Date("d-m-y",strtotime($row->joining_date));?></lable></td>
                		
                			</tr>
                			
                				<tr>
                				<th class="text-uppercase">Parent ID</th>
                				<td><label><?php 
                				$this->db->where("id",$row->parent_id);
                				$paren_info=$this->db->get("customer_info");
                				if($paren_info->num_rows()>0){
                				echo $paren_info->row()->username;
                				}else{	echo "N/A"; } ?></label></td>
                				 <th class="text-uppercase">Sponser ID</th>
                			    <td><lable><?php 
                				$this->db->where("id",$row->joiner_id);
                				$paren_info=$this->db->get("customer_info");
                				if($paren_info->num_rows()>0){
                				echo $paren_info->row()->username;
                				}else{	echo "N/A"; } ?></lable></td>
                		
                			</tr>
                		
                				<tr>
                			    <th colspan="4">Congratulations your registration is Under Process.Please pay 1449 Rs for Activation</th>
                			</tr>
                				<tr>
                			    <th colspan="4"><span style="font-size:14px;color:red">Note :-</span><span style="color:red;font-size:12px;">Your registration will be automatically cancelled if you do not pay the mentioned amount within 12 hours.</span></th>
                			</tr>
                			<tr>
                			    <th colspan="4"><a href="<?php echo base_url();?>index.php/auth/signin">login Panel</a></th>
                			</tr>
                		</table>
               </div>
            </div>
        </div>
		
		
		</div>	
	</div>
</div>
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
				<p>A great business opportunity to fulfil your dreams.</p>	
			</div>
			<div class="col-md-2 col-sm-2 col-12 right-holder center-holder-xs">
				<a href="<?php echo base_url();?>assets/img/adlplan.pdf"  target="_blank" class="button-md primary-button">Read More</a>
			</div>
		</div>
	</div>
</div>

<?php echo $this->load->view("footer"); ?>

