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
    $this->load->view('ortu/struktur'); 
  }

}


/* End of file Struktur.php */
/* Location: ./application/controllers/Struktur.php */