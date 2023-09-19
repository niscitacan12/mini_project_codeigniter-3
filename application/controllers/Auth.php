<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_model');
		$this->load->helper('my_helper');
	}

	public function index()
	{
		$this->load->view('auth/login');
	}

	public function register()
    {
        $this->load->view('auth/register');
    }

    public function aksi_register()
    {
        $email = $this->input->post('email', true);
        $username = $this->input->post('username', true);
        $password = md5($this->input->post('password', true));
        $role = 'admin'; // Sesuaikan dengan role yang diinginkan
        $data = [
            'email' => $email,
            'username' => $username,
            'password' => $password,
            'role' => $role,
        ];

        // Simpan data ke database
        $this->m_model->tambah_data('admin', $data);

        redirect(base_url() . 'auth/login');
    }
	
}