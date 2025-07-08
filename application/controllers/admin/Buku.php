<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['title'] = 'Inventaris Buku';
    $data['content'] =  $this->load->view('admin/buku/index', $data, true);
    $this->load->view('admin/layout/master', $data);
  }
}