<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}


	public function aboutus()
	{
		$this->load->view('about_us');
	}

	public function legal()
	{
		$this->load->view('legal');
	}
	
	public function our_plan()
	{
		$this->load->view('our_plan');
	}
	
	public function bankdetails()
	{
		$this->load->view('bank_details');
	}
	
	public function bookproduct()
	{
		$this->load->view('booking_products');
	}
	
	public function registration()
	{ $this->load->library("form_validation");
		$this->load->view('registration');
	}
public function contact()
	{
		$this->load->view('contact_us');
	}
	public function read()
	{
		
		$this->load->view('read');
	}
	
	public function cmd_view()
	{
		
		$this->load->view('cmd_view');
	}
	
	function insertCustmer(){
		$this->load->library("form_validation");
		$this->load->model("cmodel");
	
		$this->load->helpers("sms_helper");
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		//$this->form_validation->set_rules('parent_id','Sponsor ID','required|is_unique[customer_info.username]');
		$this->form_validation->set_rules('name','Customer Name','required');
		//$this->form_validation->set_rules('selectTree','Please Select Position','required');
		$this->form_validation->set_rules('fname','Father Name','required');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('city','City','required');
		$this->form_validation->set_rules('state','State','required');
		$this->form_validation->set_rules('pinno','PIN No.','required |exact_length[6]');
		$this->form_validation->set_rules('mobile','Mobile Number','required | numeric |exact_length[10]');
	
		$this->form_validation->set_rules('password','Password','matches[confirm_pwd]');
		$this->form_validation->set_rules('confirm_pwd','Password','matches[password]');
	
		$this->form_validation->set_rules('dob','Date Of Birth','required');
		$this->form_validation->set_rules('customRadioInline1','Gender','required');
		if($this->form_validation->run()){
			$tblnm ="customer_info";
			$maxid	=	$this->cmodel->cust_max($tblnm);
			
			$maxid	=	$maxid+1;
			
			$username="NM".$maxid;
			$rn=rand(9999,99999);
			$usern1=$maxid+$rn;
			$username1="NM".$usern1;
			$rjoinerID= $this->input->post('parent_id');
			$cid  = $this->cmodel->getrowid($rjoinerID);
			if($cid){
			//$ljoinerID= $this->input->post('lJoinerID');
			$name= $this->input->post('name');
			$fname= $this->input->post('fname');
			$address= $this->input->post('address');
			$pinno= $this->input->post('pinno');
			$mobile= $this->input->post('mobile');
			$gender= $this->input->post('customRadioInline1');
			$dob= $this->input->post('dob');
			$password= $this->input->post('password');
			$parent_id= $this->input->post('parent_id');
			$city= $this->input->post('city');
			$state= $this->input->post('state');
			$data= array(
					'parent_id'=>$rjoinerID,
					'fname'=>$fname,
					'joiner_id'=>$cid,
					'customer_name'=>$name,
					'username'=>$username1,
					'password'=>$password,
					'mobilenumber'=>$mobile,
					'current_address'=>$address,
					'city'=>$city,
					'state'=>$state,
					'gender'=>$gender,
					'pin'=>$pinno,
					
					
					'status'=>0,
					'joining_date'=>date('Y-m-d'),
					'dob'=>$dob
			);
			if($this->cmodel->insertCustomer($data)){
				
					 $msg = "Dear " . $name . " Your Registration is successfully Done,Your Username is ".$username." and password is ".$password.
							"Please Login to update http://www.nm.in.net your details And Contact to Admin for Activate your account.";
                 	sms($mobile, $msg);
					redirect('welcome/cconpage/'.$maxid);
				
			}else{
				echo "error";
			}
		/////	
			
			}	else{
		    echo "Invalid sponsor Name";
		}
			
		}else{
				$this->registration();
			}
     	}
		function cconpage(){
			$this->load->view('sub_invoice');
		}
	       
		
			function sendemail(){
			    
			    $msg=$this->input->post("message");
			        $email=$this->input->post("email");
			    
			   $data['message']= $msg;
			   $data['name']= $this->input->post("name");
			   $data['mobile']= $this->input->post("mobile");
			   $data['email']= $email;
			   $data['date']=date("y-m-d");
			   $dt =$this->db->insert("contactus",$data);
			   if($dt){
			       $this->load->library("email");
			       $this->email->from("info@adl.in.net",'ADlGM Sales Pvt.Ltd.');
			    	$this->email->subject('Thanks For enquiry us');
		        	$this->email->message('Your Details are Successfully seved and we will contact you soon. Thanks ADlGM Sales Pvt.Ltd., Mau');
		
			       $this->email->to($email);
			      $senddt =$this->email->send();
			      if($senddt){ ?>
			      <script>
			          alert("Your Quiry has been successfully Submitted .");
			      </script>
			        <?php  redirect("welcome/contact",'refresh');
			      }
			   }
			    
			}
		
		
		
		
		function checkID(){
        $this->load->model("cmodel");
        $parentID= $this->input->post('parent_id');
        //print_r($parentID);

        $getvalue = $this->cmodel->checkStatus("customer_info",$parentID);
        echo (json_encode($getvalue));
    }
		
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */