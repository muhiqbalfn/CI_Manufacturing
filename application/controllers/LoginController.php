<?php defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('LoginModel');
	}

	public function index()
	{
		$this->load->view('login');
	}
	
	public function login(){
		if(isset($_POST['login'])){
			$user   = $this->input->post('user',true);
			$pass   = $this->input->post('pass',true);
			$status = 'Pengurus';
			$cek   	= $this->LoginModel->login($user, $pass, $status);
			$hasil  = count($cek);
			if($hasil > 0)
			{
				$in   = $this->db->get_where('tb_penghuni', array('user'=>$user, 'pass' => $pass, 'status' => $status))->row();
				$data = array('udhmasuk'  => true,
							  'id_penghuni'   => $in->id_penghuni,
							  'nama_penghuni' => $in->nama_penghuni,
							  'status'  	  => $in->status);
				
				$this->session->set_userdata($data);
				redirect(base_url('HomeController'));
			}
			else
			{
				echo "Salah 2 !";
			}
		}
		else
		{
			echo "Salah 1 !";
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('LoginController'));
	}

}