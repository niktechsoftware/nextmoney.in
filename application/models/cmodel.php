<?php 
    class Cmodel extends CI_Model{
			public function selectlegleft($data1){
    		//  $returndata = array();
    	//echo $data1."  dd";
    		$this->db->where("c_id", $data1);
    		$rowdata = $this->db->get("silver_tree")->row();
    		if ($rowdata) {
    	
    			if ($rowdata->left) {
    				$returndata= $this->selectlegleft($rowdata->left);
			//print_r($returndata);exit();
    			} else {
    				$returndata= $rowdata->c_id;
    	
    			}
    			return $returndata;
    	
    		}
    	
    	}
    	public function position($data, $id ,$po)
    	{
    			$this->db->where("c_id", $id);
    			$fty =$this->db->get("silver_tree")->row();
   
    			if(!$fty->$po){
    				$this->db->where("c_id", $id);
    				$this->db->update("silver_tree", $data);
    			$datainsert = array(
    					"c_id"=>$data[$po]
    			);
    			$this->db->insert("silver_tree",$datainsert);
    			$this->db->insert("silver_mbalance",$datainsert);
    			}
    			return true;
    	}
    	
    	public function selectlegright($data1){
    		// $returndata = array();
    	
    		$this->db->where("c_id", $data1);
    		$rowdata = $this->db->get("silver_tree")->row();
    		if ($rowdata) {
    			if ($rowdata->right) {
    				$returndata= $this->selectlegright($rowdata->right);
    			} else {
    				$returndata = $rowdata->c_id;
    			}
    			return $returndata;
    		}
    	}
		
        function cust_max($tblnm){
            $this->db->select_max('id');
						$this->db->from($tblnm);
						$maxid=$this->db->get();
						if($maxid->num_rows()>0){
			      	return $maxid->row()->id;
						}else{
							return 1; 
						}
        }
        
        function activestatus($custid,$mpin,$tblnm){
        	$this->db->where("status",0);
        	$this->db->where("username",$custid);
        	$checksv = $this->db->get($tblnm);
        	$this->db->where("status",0);
        	$this->db->where("mpin",$mpin);
        	$checkpinv =  $this->db->get("mpin");
        	if(($checksv->num_rows()>0)&& ($checkpinv->num_rows()>0)){
        		
        	$arr =array(
        			"status" =>1
        	);
        
        	$this->db->where("username",$custid);
        	  $this->db->update($tblnm,$arr);
        	  $data = array(
        	  		"status" =>1,
        	  		"active_mpin_date"=>date('Y-m-d H:i:s'),
        	  		"id_active" =>$custid
        	  );
        	 
        	  $this->db->where("mpin",$mpin);
        	  $this->db->update("mpin",$data);
        	  return true;
        	}else{
        		echo " Customer ID Error";
        	}
        }
        
        function insertCustomer($data){
            $query =$this->db->insert('customer_info',$data);
            return $query; 
        }
        
        function checkStatus($table,$user){
        	$this->db->where('username',$user);
        	$c_ID=$this->db->get($table);
        	if($c_ID->num_rows()>0){
        		$data = array(
        		'msg' =>  '<div class ="alert alert-success">'.$c_ID->row()->customer_name.'</div>',
        		'checkv'=>true		
        	);
        	}else{
        		$data=array(
        		'msg'=> '<div class ="alert alert-danger">Wrong sponsor UserID. </div>',
        		"checkv"=>false		
        		);
        			}
        			return $data;	
        }
        
        function getrowid($username){
        	$this->db->where("username",$username);
        		$this->db->where("status",1);
        	$getrow = $this->db->get("customer_info")->row()->id;
        	return $getrow;
        }
			function abc($id)
			{
				return $id;
			}
        function getCrecord($id){
        	$this->db->where('id',$id);
        	$record = $this->db->get("customer_info");
        	return $record;
	     	}
		function pay_detail_insert($cust_id,$txn,$reffno,$file_name)
		{
			$this->db->where("c_id",$cust_id);
			$pyd = $this->db->get("pay_details");
			if($pyd->num_rows()>0){
				$val = array(
						'reffno' => $reffno,
						'transaction' => $txn,
						'uploadfile' => $file_name
				);
				 			$this->db->where("c_id",$cust_id);
				$insrt = $this->db->update("pay_details",$val);
				return $insrt;
			}else{
			$val = array(
						'c_id' => $cust_id,
						
						'reffno' => $reffno,
						'transaction' => $txn,
						'uploadfile' => $file_name
			);
        	// $this->db->where('id',$id);
        	$insrt = $this->db->insert("pay_details",$val);
        	return $insrt;
			}
		}
		
		//aarju mathods
		function getcustomerdata($matchcon,$status,$tblname){
			if($status==2){
				$req = $this->db->query("select customer_info.id,customer_info.customer_name,customer_info.fname,customer_info.status,customer_info.mobilenumber,customer_info.email,customer_info.current_address,customer_info.city,pay_details.reffno,pay_details.transaction,pay_details.uploadfile from customer_info,pay_details where customer_info.id = pay_details.c_id and customer_info.status=0");
				return $req;
			}else{
				$this->db->where($matchcon,$status);
				return  $this->db->get($tblname);
			}
		
		}
		function getpaydetails(){
			return  $this->db->get("pay_details");
		}
		 function getTransaction($cid,$incometype){
		 	$this->db->where("transaction_type",$incometype);
		 	$this->db->where("paid_to",$cid);
		 	$getrecord = $this->db->get("inner_daybook");
		 	return $getrecord;
		 }

		 function getSilver($cid){
		 	$this->db->where("c_id",$cid);
		 	return $this->db->get("silver_mbalance");
		 }
		 
		 function getGold($cid){
		 	$this->db->where("c_id",$cid);
		 	return $this->db->get("gold_mbalance");
		 }
		 function getDiamond($cid){
		 	$this->db->where("c_id",$cid);
		 	return $this->db->get("diamond_mbalance");
		 }
		 
		 function getCrown($cid){
		 	$this->db->where("c_id",$cid);
		 	return $this->db->get("crown_balance");
		 }
		//aarju mathods
		
		
		
		
		
    }
?>