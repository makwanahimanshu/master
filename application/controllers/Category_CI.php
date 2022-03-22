<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_CI extends CI_Controller {

        public function category(){
            $this->load->view('add_category');
        }

        public function viewcategory(){
            $this->load->model('Category_model');
            $order = $this->Category_model->all();
            $data = array();
           // $data['category'] = $category;
            $this->load->view('view_category',$data);
        }

}
