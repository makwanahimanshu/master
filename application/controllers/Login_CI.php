<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_CI extends CI_Controller {

        public function login(){
            $this->load->view('login');
        }
}
