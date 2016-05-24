<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->ion_auth->logged_in() ==  false){
			redirect('auth/');
		}
	}


	public function index()
	{		
		
		$this->load->view('home_view');
	}
}
