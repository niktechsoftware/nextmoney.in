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
		$this->load->view('aboutus');
	}
     public function service()
	{
		$this->load->view('service');
	}
	public function oralhealth()
	{
		$this->load->view('oralhealth');
	}
	public function smilegallery()
	{
		$this->load->view('smilegallery');
	}
     public function contactus()
	{
		$this->load->view('contactus');
	}
	public function inquiry()
	{
		$this->load->view('inquiry');
	}
     public function adminpannel()
	{
		$this->load->view('adminpannel');
	}





}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */