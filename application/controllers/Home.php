<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function dashboard()
	{
		$this->load->view('home');		
	}


}
