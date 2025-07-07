<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_siswa');
  }

  public function index()
  {
    $data['siswa'] = $this->M_siswa->get_all();
    $data['title'] = 'Data Siswa';
    $data['content'] =  $this->load->view('admin/siswa/index', $data, true);
    $this->load->view('admin/layout/master', $data);
  }

}
