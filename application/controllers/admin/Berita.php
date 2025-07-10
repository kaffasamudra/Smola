<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['title'] = 'Manajemen Berita';
    $data['content'] =  $this->load->view('admin/berita/index', $data, true);
    $this->load->view('admin/layout/master', $data);
  }
}