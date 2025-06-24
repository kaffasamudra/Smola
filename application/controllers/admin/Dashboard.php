<?php 
/**
 * 
 */
class Dashboard extends CI_Controller
{
	
	public function __construct() {
        parent::__construct();
    }

	public function index() {
		$data['title'] = "Dashboard";
		$data['content'] = $this->load->view("admin/dashboard", $data, true);
		$this->load->view("admin/layout/master", $data);
	}
}
?>