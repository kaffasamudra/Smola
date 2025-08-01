<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BeritaOrtu extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
            $this->load->helper('sidebar_helper');

  }

  public function index()
  {
    $data['title'] = 'PAUD TPA Athahira - Berita';
    $data['content'] =  $this->load->view('ortu/berita/index', $data, true);
    $this->load->view('ortu/layout/master', $data);
  }
  
  public function detail(){
    // $this->db->select('judul');
    // $this->db->from('berita');
    // $query = $this->db->get();
    // $data['title'] = $query->row()->judul;

    $data['title'] = 'Judul Berita';
    $data['content'] =  $this->load->view('ortu/berita/detail', $data, true);
    $this->load->view('ortu/layout/master', $data);
  }

}