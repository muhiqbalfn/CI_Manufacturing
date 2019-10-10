<?php defined('BASEPATH') OR exit('No direct script access allowed');

class PiketController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('PiketModel');
	}

	public function index()
	{
		$data['data'] = $this->PiketModel->get_data();
		$this->load->view('piket',$data);
	}

}