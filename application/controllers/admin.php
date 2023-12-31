<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{

    function __construct()
    {
        parent::  __construct();
		$this->load->model('m_model');
		$this->load->helper('my_helper');;
        if ($this->session->userdata('logged_in')!=true) {
            redirect(base_url().'auth');
        }  
    }

    public function index()
    {
        $data['siswa'] = $this->m_model->get_data('siswa')->num_rows();
        $data['mapel'] = $this->m_model->get_data('mapel')->num_rows();
        $data['kelas'] = $this->m_model->get_data('kelas')->num_rows();
        $data['guru'] = $this->m_model->get_data('guru')->num_rows();
        $this->load->view('admin/index', $data);
    }

    // bagian siswa
    public function siswa()
    {
        $data['siswa'] = $this->m_model->get_data('siswa')->result();
        $this->load->view('admin/siswa', $data);
    }

    // bagian guru
    public function guru()
    {
        $data['guru'] = $this->m_model->get_data('guru')->result();
        $this->load->view('admin/guru', $data);
    }
   
    public function tambah_siswa()
    {
        $data['kelas'] = $this->m_model->get_data('kelas')->result();
        $this->load->view('admin/tambah_siswa', $data);
    }
    
    public function aksi_tambah_siswa()
    {
        $data = [
            'nama_siswa' => $this->input->post('nama'),
            'nisn' => $this->input->post('nisn'),
            'gender' => $this->input->post('gender'),
            'id_kelas' => $this->input->post('id_kelas'),
        ];
    
        $this->m_model->tambah_data('siswa', $data);
        redirect(base_url('admin/siswa'));
    }

    public function tambah_guru()
    {
        $data['guru'] = $this->m_model->get_data('guru')->result();
        $this->load->view('admin/tambah_guru', $data);    
    }
    
    public function aksi_tambah_guru() 
    { 
        $data=[ 
            'nama_guru' => $this->input->post('nama'), 
            'nik' => $this->input->post('nik'), 
            'gender' => $this->input->post('gender'), 
        ]; 
        $this->m_model->tambah_data('guru', $data); 
        redirect(base_url('admin/guru'));
    }
    
    public function update_siswa($id)
    {
        $data['siswa'] = $this->m_model
            ->get_by_id('siswa', 'id_siswa', $id)
            ->result();
        $data['kelas'] = $this->m_model->get_data('kelas')->result();
        $this->load->view('admin/update_siswa', $data);
    }

    
    public function update_guru($id)
    {
        $data['guru'] = $this->m_model->get_by_id('guru', 'id', $id)->result();
        // $data['guru'] = $this->m_model->get_data('guru')->result();
        $this->load->view('admin/update_guru', $data);
    }
    
    public function aksi_update_siswa()
    {
        $data = array (
            'nama_siswa' => $this->input->post('nama'),
            'nisn' => $this->input->post('nisn'),
            'gender' => $this->input->post('gender'),
            'id_kelas' => $this->input->post('kelas'),
        );
    
        $eksekusi = $this->m_model->ubah_data(
            'siswa',
            $data,
            array('id_siswa' => $this->input->post('id_siswa'))
        );
    
        if ($eksekusi)
        {
            $this->session->set_flashdata('sukses', 'berhasil');
            redirect(base_url('admin/siswa'));
        }
        else
        {
            $this->session->set_flashdata('error', 'gagal');
            redirect(base_url('admin/siswa/update_siswa/'.$this->input->post('id_siswa')));  
        }
    }
    
    public function aksi_update_guru()
    {
        $data = array (
            'nama_guru' => $this->input->post('nama_guru'),
            'nik' => $this->input->post('nik'),
            'gender' => $this->input->post('gender'),
        );
    
        $eksekusi = $this->m_model->ubah_data(
            'guru',
            $data,
            array('id' => $this->input->post('id'))
        );
    
        if ($eksekusi)
        {
            $this->session->set_flashdata('sukses', 'berhasil');
            redirect(base_url('admin/guru'));
        }
        else
        {
            $this->session->set_flashdata('error', 'gagal');
            redirect(base_url('admin/guru/update_guru/'.$this->input->post('id')));  
        }
    }
    
    public function hapus_siswa($id) 
    { 
        $this->m_model->delete('siswa', 'id_siswa', $id); 
        $this->session->set_flashdata('success', 'Siswa berhasil dihapus!'); 
        redirect(base_url('admin/siswa')); 
    }
    public function hapus_guru($id)
    {
        $this->m_model->delete('guru', 'id', $id);
        $this->session->set_flashdata('success', 'guru berhasil dihapus!');     
        redirect(base_url('admin/guru'));
    }
}    