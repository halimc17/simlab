<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		echo "<h1>It Works !!</h1>";
		$this->load->view('welcome_message');
	}
}
