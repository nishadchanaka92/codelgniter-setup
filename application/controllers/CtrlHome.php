<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CtrlHome extends CI_Controller {

    public function __construct() {
		parent::__construct();

		$this->load->helper('url');
		$this->load->database();
		// $this->load->model('');
	}

    public function index() {
        $this->page_load('VwHome');
    }

    /*
	 * Common function for load all views
	 */

	 public function page_load($pg_name = '', $data = '') {
        $this->load->view('layouts/VwHeader.php');
        $this->load->view($pg_name . '',$data);
        $this->load->view('layouts/VwFooter.php');
    }


}