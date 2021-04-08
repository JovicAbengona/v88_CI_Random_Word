<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Random extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		if(($this->session->userdata("counter")) == NULL){
			$this->session->set_userdata("counter", 0);
			$this->random_word();
		}
		else{
			$this->load->view("random");
		}
	}

	public function random_word(){		
		$chars = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");

		$random_word = "";
		for($x = 1; $x <= 14; $x++){
			$index = rand(0, count($chars)-1);
			$random_word .= $chars[$index];
		}

		$this->session->set_userdata("random_word", $random_word);
		$this->session->set_userdata("counter", $this->session->userdata("counter") + 1);

		redirect("/");
	}
}
