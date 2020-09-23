<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index(){
		$this->load->view('app/layouts/app');
		$this->load->view('app/layouts/navigation');
		$this->load->view('app/invoices/index');
		$this->load->view('app/layouts/menu');
		$this->load->view('app/layouts/footer');
	}


}
