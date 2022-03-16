<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	// public function index()
	// {
		//HY HIII
	// 	$this->load->view('welcome_message');
	// }

	public function basic_forms()
	{
		$this->load->view('basic_forms');
	}

	public function sidebar()
	{
		$this->load->view('sidebar');
	}

	public function dash()
	{
		$this->load->view('index');
	}

	public function basic_tables()
	{
		$this->load->view('basic_tables');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function register()
	{
		$this->load->view('register');
	}
}
