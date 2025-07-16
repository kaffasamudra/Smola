<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BukuOrtu extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['title'] = 'PAUD TPA Athahira - Buku';
    $data['content'] =  $this->load->view('ortu/buku/index', $data, true);
    $this->load->view('ortu/layout/master', $data);
  }

public function detail()
  {
    $this->load->view('ortu/buku/detail');
  }

}
