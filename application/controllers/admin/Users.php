<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_users');
  }

  public function index()
  {
    $data['users'] = $this->M_users->get_all();
    $data['title'] = "Manajemen Pengguna - Data Pengguna";
    $data['content'] = $this->load->view('admin/users/index', $data, true);
    $this->load->view('admin/layout/master', $data);
  }
  
  public function create()
  {
    $data['title'] = "Manajemen Pengguna - Tambah Pengguna";
    $data['content'] = $this->load->view('admin/users/create', $data, true);
    $this->load->view('admin/layout/master', $data);
  }

}