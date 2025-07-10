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
    $this->load->view('ortu/buku/index');
  }

public function detail()
  {
    $this->load->view('ortu/buku/detail');
  }

}
