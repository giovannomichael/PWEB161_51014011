<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_gio extends CI_Controller {


	public function index()
	{
		$this->load->view('contactperson');
	}
}
