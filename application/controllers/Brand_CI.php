<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand_CI extends CI_Controller {

        public function brand(){
            $this->load->view('add_brand');
        }

        public function viewbrand(){
            $this->load->model('Brand_model');
            $order = $this->Brand_model->all();
            $data = array();
          //  $data['brand'] = $brand;
            $this->load->view('view_brand',$data);
        }
}
