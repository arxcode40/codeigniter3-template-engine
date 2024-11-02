<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->library('template');
		$this->load->helper('html5');

		$this->template->view('templates/home', array('title' => 'Template Engine'));
	}
}
