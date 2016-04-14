<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Surveys extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Survey');
	}

	public function process_form()
	{
	// 	$survey_info["first_name"] = $this->input->post["first_name"];
	// 	var_dump($survey_info);
	// 	die();
		$this->load->view('Survey');
	}
}