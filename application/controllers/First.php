<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller {
    
	public function index()
	{
		$this->load->view('Front_page');
	}
}