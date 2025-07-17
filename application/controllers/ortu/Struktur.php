<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Struktur extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['title'] = 'PAUD TPA Athahira - Struktur Paud';
    $data['content'] =  $this->load->view('ortu/struktur', $data, true);
    $this->load->view('ortu/layout/master', $data);
  }

}


/* End of file Struktur.php */
/* Location: ./application/controllers/Struktur.php */