<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_CI extends CI_Controller {

        public function product(){
            $this->load->view('add_product');
        }

        public function viewproduct(){
            $this->load->model('Product_model');
            $product = $this->Product_model->all();
            $data = array();
            $data['product'] = $product;
            $this->load->view('view_product',$data);
        }
}
