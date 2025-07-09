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
    $this->load->view('ortu/berita');
  }

}


/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */