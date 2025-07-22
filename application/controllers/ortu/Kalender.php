<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kalender extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['title'] = 'PAUD TPA Athahira - Kalender Akademik';
    $data['content'] =  $this->load->view('ortu/kalender', $data, true);
    $this->load->view('ortu/layout/master', $data);
  }
}
