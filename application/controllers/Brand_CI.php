<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand_CI extends CI_Controller {

        // public function brand(){
        //     $this->load->view('add_brand');
        // }

        public function viewbrand(){
            $this->load->model('Brand_model');
            $brand = $this->Brand_model->all();
            $data = array();
            $data['brand'] = $brand;
            $this->load->view('view_brand',$data);
        }

        public function create(){
          $this->load->model('Brand_model');
          $this->form_validation->set_rules('brandd_name','brandd_name','required');
        
          if($this->form_validation->run() == false){
               $this->load->view('add_brand');
          } else {
              $formArray = array();
              $formArray['brandd_name'] = $this->input->post('brandd_name');
              $this->Brand_model->create($formArray); 
             redirect(base_url().'index.php/Brand_CI/viewbrand'); 
            }  
    
      }
   }     
           
          


      
