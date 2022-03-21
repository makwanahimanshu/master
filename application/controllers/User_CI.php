<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_CI extends CI_Controller {

        public function user(){
            $this->load->view('user');
        }
}
