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
    $data['content'] =  $this->load->view('ortu/berita', $data, true);
    $this->load->view('ortu/layout/master', $data);
  }

}