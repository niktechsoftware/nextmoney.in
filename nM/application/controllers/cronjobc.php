<?php 
class cronjobc extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model("tree");
		$this->load->model('cmodel');
		$this->load->model("mpinmodel");
	}
	
   
     public function poolIncome($cid){
    	  $pair=0;
			
        $co=0;
        $count1=0;
        $cor=0;
       $lefttotal=0;
       $righttotal=0;
       $table="silver_tree";
       $posl="leftjoiner";
       
       
       $this->db->where('c_id', $cid);
       $query2 = $this->db->get('silver_tree');
       if($query2->num_rows()>0){
            $query2=$query2->row();
            
            
       if($query2->left){
           $this->db->where("id",$query2->left);
           $data1 = $this->db->get("customer_info")->row();
           if($data1->status){
               $co=$co+1;

               //echo $query2->right;

           }
        $lefttotal =$this->db->query("select * from silver_tree join customer_info where customer_info.status=1 and silver_tree.leftjoiner='$cid' AND customer_info.id=silver_tree.left")->num_rows();
       }
       
      
       if($query2->right){
           $this->db->where("id",$query2->right);
           $data1 = $this->db->get("customer_info")->row();
           if($data1->status){
               $cor=$cor+1;
              // echo "<br>".$data1->status;
           }
           
           $righttotal =$this->db->query("select * from silver_tree join customer_info where customer_info.status=1 and silver_tree.rightjoiner='$cid' AND customer_info.id=silver_tree.right")->num_rows();
       }
       }
       echo "left=".$lefttotal."<br>";
      echo "right=".$righttotal."<br>";
      $leftjoin= $lefttotal;
      $rightjoin= $righttotal;
      
      
      //invoice code
      	$tblnm="invoice_serial";
		$maxid=$this->mpinmodel->pin_max($tblnm)+1;
		$id1=1000+$maxid;
		$invoice_number="ADLI".$id1;
		$leveln=0;
		
		if(($rightjoin>0)&&($leftjoin>0)){
		    //echo $rightjoin+$leftjoin;
			$totperson = $rightjoin+$leftjoin;
			if($totperson > 2){
			    //echo $cid;
			    //echo $righttotal;
					$this->tree->getpoolposition($cid);
			}
		}
     }
			
			
    
      public function roiincome(){
          
          $date2  = date('Y-m-d');
          $date1  =date('Y-m-d',(strtotime ( '-1 day' , strtotime ( $date2) ) ));
		    	
		    	    $this->db->where("DATE(date)",$date1);
		    	    $this->db->where("level",0);
		    	 $getlayak=   $this->db->get("autopool_details");
		    	 $j=0;
		    	 $this->db->where("transaction_type",3);
		    	 $this->db->where("DATE(date1)",$date2);
		    	 $inre =   $this->db->get("inner_daybook");
		    	 if(($getlayak->num_rows()>0)&&($inre->num_rows() < 1)){
		    	    
		    	$this->db->where("DATE(date) < ",$date1);
		    	$this->db->or_where("level > ",0);
		    	$numg1  =  $this->db->get("autopool_details");
		    	echo $numg1->num_rows();
		    	echo "ffd";
		    	echo $getlayak->num_rows();
		    	
		    	if($numg1->num_rows()>0){
		    	     $disamount = ($getlayak->num_rows() * 180)/$numg1->num_rows();
		    	     
		    	    foreach($numg1->result() as $numr):
		    	        	$tblnm="invoice_serial";
		$maxid=$this->mpinmodel->pin_max($tblnm)+1;
		$id1=1000+$maxid;
		$invoice_number="ADLI".$id1;
		
		
		    	        $this->db->where("c_id",$numr->c_id);
		    	      $indc =  $this->db->get("autopool_details");
		    	        if($indc->num_rows()>0){
		    	            	$dataroi = array(
							    'roi_income'=>$indc->row()->roi_income+$disamount
					);
					$this->db->where("c_id",$numr->c_id);
					$this->db->update("autopool_details",$dataroi);
					
					if($disamount>0){
					$daypoir = array(
							"invoice_no"    =>$invoice_number,
							"paid_to"	        =>$indc->row()->c_id,
							"paid_from"     =>"ROI",
							"transaction_type"=>3,
							"date1"         =>date('Y-m-d H:i:s'),
							"amount"           =>$disamount
					);
					$this->db->insert("inner_daybook",$daypoir);
					            		$invoice=array(
			"invoice_no"=>$invoice_number,
			"reason"=>"Roi Income",
			"invoice_date"=>date('Y-m-d H:i:s')
		);
		$this->db->insert("invoice_serial",$invoice);
		    	        }}
		    	        endforeach;
		    	    
		    	}
		    	 }else{
		    	 	echo "already given";
		    	 }
		    	
		    	    
		    	    
		}
		
		public function updatelevel(){
			$fty1 =$this->db->get("autopool_details");
			if($fty1->num_rows()>0){
				foreach($fty1->result() as $fty):
				$this->db->where("c_id",$fty->c_id);
				$cyp  =$this->db->get("autopool_details")->row();
			if(($cyp->left)&&($cyp->mid)&&($cyp->right)){
				$count=1;
				$count1=1;
				$count2=1;
				$left = $this->tree->getPoolCountData($cyp->left,$count);
				$mid = $this->tree->getPoolCountData($cyp->mid,$count1);
				$right =$this->tree->getPoolCountData($cyp->right,$count2);
				$aumaster=$this->db->get("auto_pool");
			
				$newp=$left+$mid+$right;
				echo "total ".$fty->c_id."-".$newp."<br> ";
				foreach($aumaster->result() as $amp):
				if($amp->person_no > $newp){
					$leveln =$amp->id;
					break;
				}
				endforeach;
			
				$this->db->select_sum("pool_amount");
				$this->db->where("id <",$leveln);
				$paisa = $this->db->get("auto_pool");
				$dup = array(
						"level"=>$leveln-1,
						"pool_income"=>	$paisa->row()->pool_amount
				);
				$this->db->where("c_id",$fty->c_id);
				$this->db->update("autopool_details",$dup);
			}
			endforeach;
		}
		}
    function generate_income(){
         date_default_timezone_set('Asia/Kolkata');
        $number ="8382829593";
        $msg ="Cron generated";
       sms($number,$msg);
       $this->db->where("status",1);
       $getCustomer = $this->db->get("customer_info");
       if($getCustomer->num_rows()>0){
        foreach($getCustomer->result() as $gc):
        $this->directIncome($gc->id);
        $this->pairMachingIncome($gc->id);
      	$this->poolIncome($gc->id);
        endforeach;
        $this->updatelevel();
          // $this->roiincome($gc->id);
           
           
       }
    }
    
}