<?php 
class cronroi extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model("tree");
		$this->load->model('cmodel');
		$this->load->model("mpinmodel");
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
		    	$numg1  =  $this->db->get("autopool_details");
		    	echo $numg1->num_rows();
		    	echo "ffd";
		    	echo $getlayak->num_rows();
		    	
		    	if($numg1->num_rows()>0){
		    	     $disamount = ($getlayak->num_rows() * 180)/$numg1->num_rows();
		    	  echo  "distribute".$disamount;  
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
		
	
    function generate_income(){
         date_default_timezone_set('Asia/Kolkata');
        $number ="8382829593";
        $msg ="Cronroi generated";
       sms($number,$msg);
       $this->db->where("status",1);
       $getCustomer = $this->db->get("customer_info");
       if($getCustomer->num_rows()>0){
           $this->roiincome();
       }
    }
    
}